<?php

    namespace App\Http\Livewire;

    use App\Models\Bill;
    use App\Models\CandidateCourse;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Request as Rq;
    use Livewire\Component;
    use Livewire\Request;

    class CourseInvoice extends Component {

        public $course,$url;
        public $invoicegenerated = false;

        public function mount()
        {
            if($this->course->invoice) {
                $this->invoicegenerated = true;
            }
        }

        public function generateInvoice($course)
        {

            $course = CandidateCourse::findOrFail($course);


            if(!isset(Auth::user()->candidate['mobile'])) {
                dd("Mobile number incorrect");
            }
            $curl = curl_init();
            $json = [
                0 => [
                    'MerchantId'       => env('PAYPRO_MERCHANT_ID'),
                    'MerchantPassword' => env('PAYPRO_MERCHANT_PASSWORD'),
                ],
                1 => [
                    'OrderNumber'              => 'Online-Evaluation-' . now()->unix(),
                    'OrderAmount'              => $this->course->course_price,
                    'OrderDueDate'             => today()->addDays(3)->format('d/m/Y'),
                    'OrderAmountWithinDueDate' => $this->course->course_price,
                    'OrderAmountAfterDueDate'  => $this->course->course_price,
                    'OrderTypeId'              => 'Service',
                    'OrderType'                => 'Service',
                    'IssueDate'                => today()->format('d/m/Y'),
                    'TransactionStatus'        => 'UNPAID',
                    'CustomerName'             => urlencode(Auth::user()->name),
                    'CustomerMobile'           => Auth::user()->candidate['mobile'],
                    'CustomerEmail'            => Auth::user()->email,
                    'CustomerAddress'          => urlencode(Auth::user()->candidate['address']),
                    'CustomerBank'             => '',
                ],
            ];

            curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Length: 0'));

            $finalUrl = json_encode($json);
            curl_setopt_array($curl, array(
                CURLOPT_URL            => env('PAYPRO_MERCHANT_URL') .'co?oJson='. $finalUrl . '',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING       => '',
                CURLOPT_MAXREDIRS      => 10,
                CURLOPT_TIMEOUT        => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST  => 'POST',
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_SSL_VERIFYHOST => 0,
            ));

            $response      = curl_exec($curl);
            $finalResponse = json_decode($response);
            curl_close($curl);
//            dd($finalResponse);
            if($finalResponse[0]->Status == 00) {
//                dd($finalResponse[1]->Click2Pay);
                Bill::create([
                                 'pay_link'            => $finalResponse[1]->Click2Pay,
                                 'bill_url'            => $finalResponse[1]->BillUrl,
                                 'pay_id'              => $finalResponse[1]->ConnectPayId,
                                 'amount'              => $finalResponse[1]->OrderAmount,
                                 'candidate_id'        => Auth::user()->candidate['id'],
                                 'status'              => "UNPAID",
                                 'due_date'            => today()->addDays(3)->format('d-m-Y'),
                                 'course_id'           => '0',
                                 'candidate_course_id' => $course->id,
                             ]);
            }
//            dd("Saved Successfully");
            $course = CandidateCourse::where('id',$course->id)->with('invoice')->first();
            $this->invoicegenerated = true;
            $this->course = $course;

        }

        public function render()
        {
            return view('livewire.course-invoice');
        }
    }
