<?php

    namespace App\Http\Livewire;

    use App\Models\Bill;
    use App\Models\CandidateCourse;
    use App\Models\TalentPackage as TalentPackageModel;
    use Carbon\Carbon;
    use Illuminate\Support\Facades\Auth;
    use Livewire\Component;
    use phpDocumentor\Reflection\PseudoTypes\False_;

    class CourseInvoice extends Component {

        public $course;
        public $invoicegenerated = false;

        public function generateInvoice($course)
        {

            $course = CandidateCourse::findOrFail($course);
            $curl = curl_init();

            $json = [
                0 => [
                    'MerchantId'       => 'Ace_Institute',
                    'MerchantPassword' => 'Demo@ace21',
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
                CURLOPT_URL            => 'https://demoapi.paypro.com.pk/cpay/co?oJson=' . $finalUrl . '',
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
                Bill::create([
                                 'candidate_id'        => Auth::user()->candidate['id'],
                                 'amount'              => $finalResponse[1]->OrderAmount,
                                 'status'              => "UNPAID",
                                 'due_date'            => today()->addDays(3)->format('d-m-Y'),
                                 'course_id'           => '',
                                 'candidate_course_id' => $course->id,
                             ]);
            }
//            dd("Saved Successfully");
            $this->invoicegenerated = true;

        }

        public function render()
        {
            return view('livewire.course-invoice');
        }
    }
