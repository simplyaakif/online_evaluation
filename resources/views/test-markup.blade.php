<x-layouts.main title="Test Markup">
    <div class="container mx-auto listening-section">

    <section class="">
        <h1>Question 01</h1>
        <h2>Match the time with the event. Write the correct number next to the letter.</h2>
        <table>
            <thead>
            <tr>
                <th>Example</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr class="">
                <td>A. <input class="" type="text"> Today</td>
                <td>1. Winston will go to Japan</td>
            </tr>
            <tr class="">
                <td>B <input class="" type="text">
                    Nextweek</td>
                <td>2 Winston will register at the World Language Academy</td>
            </tr>
            <tr class="">
                <td>C <input class="" type="text"> Next
                    summer</td>
                <td>3 Winston will study Japanese</td>
            </tr>
            </tbody>
        </table>
    </section>
    <section class="bg-gray-100 rounded px-8 py-4 my-4">
        <h1>Questions 2 and 3</h1>
        <h2>Choose two letters, A-F.</h2>
        <h4>2 What TWO classes are offered at the World Language Academy?</h4>
        <ul>
            <li><input type="checkbox" name="q2">Japanese for University Professors</li>
            <li><input type="checkbox" name="q2">Japanese for Business Travelers</li>
            <li><input type="checkbox" name="q2">Japanese for Tour Guides</li>
            <li><input type="checkbox" name="q2">Japanese for Tourists</li>
            <li><input type="checkbox" name="q2">Japanese for Language Teachers</li>
            <li><input type="checkbox" name="q2">Japanese for Restaurant Workers</li>
        </ul>
        <h2>Choose two letters, A-F.</h2>
        <h4>3 In Japan, Mark Winston says he will probably</h4>
        <ul>
            <li><input type="checkbox" name="q3">go shopping.</li>
            <li><input type="checkbox" name="q3">climb mountains.</li>
            <li><input type="checkbox" name="q3">attend a business meeting.</li>
            <li><input type="checkbox" name="q3">try Japanese cuisine.</li>
            <li><input type="checkbox" name="q3">take a university course.</li>
            <li><input type="checkbox" name="q3">study with a tutor.</li>
        </ul>
    </section>
    <section>
        <h1>Questions 4-8</h1>
        <h2>Complete the schedule below.</h2>
        <h4>Write NO MORE THAN TWO WORDS AND/OR A NUMBER for each answer.</h4>
        <h3>Japanese Class Schedule</h3>
        <table>
            <tbody>
            <tr>
                <td>
                    Morning
                </td>
                <td>
                    <h5>Days: Monday-Friday</h5>
                    <h5>Time: 4 <input type="text"></h5>
                    <h5>Level: Beginner</h5>
                </td>
            </tr>
            <tr>
                <td>
                    Afternoon
                </td>
                <td>
                    <h5>Days: Monday, Wednesday, Thursday</h5>
                    <h5>Time: 1:00-3:00</h5>
                    <h5>Level: 5 <input type="text"></h5>
                </td>
            </tr>
            <tr>
                <td>
                    Evening
                </td>
                <td>
                    <h5>Days: Monday, Wednesday, Thursday</h5>
                    <h5>Time: 5:30-7:30</h5>
                    <h5>Level: 6 <input type="text"></h5>

                    <h5>Days: 7 <input type="text"></h5>
                    <h5>Time: 7:30-9:30</h5>
                    <h5>Level: Advanced</h5>
                </td>
            </tr>
            <tr>
                <td>
                    Weekend
                </td>
                <td>
                    <h5>Days: Saturday</h5>
                    <h5>Time: 8 <input type="text"></h5>
                    <h5>Level: Beginner</h5>
                </td>
            </tr>
            </tbody>
        </table>
    </section>
    <section>
        <h1>Questions 9 and 10</h1>
        <h2>Choose the correct letter, A, B, or C.</h2>
        <h4>9 Which class will Mark take?</h4>
        <ul class="flex space-x-4 items-center">
            <li>
                <label for="mark-class-01" class="flex items-center">
                    <input type="radio" name="q9" id="mark-class-01">
                    <img width="200" class="rounded-md" src="{{asset('storage/listening/mark-class-01.jpg')}}" alt="">
                </label>
            </li>
            <li>
                <label for="mark-class-02" class="flex items-center">
                    <input type="radio" name="q9" id="mark-class-02">
                    <img width="200" class="rounded-md" src="{{asset('storage/listening/mark-class-02.jpg')}}" alt="">
                </label>
            </li>
            <li>
                <label for="mark-class-03" class="flex items-center">
                    <input type="radio" name="q9" id="mark-class-03">
                    <img width="200" class="rounded-md" src="{{asset('storage/listening/mark-class-03.jpg')}}" alt="">
                </label>
            </li>
        </ul>


        <h4>10 How will he pay?</h4>
        <ul class="flex space-x-4 items-center">
            <li>
                <label for="mark-pay-01" class="flex items-center">
                    <input type="radio" name="q10" id="mark-pay-01">
                    <img width="200" class="rounded-md" src="{{asset('storage/listening/mark-pay-01.jpg')}}" alt="">
                </label>
            </li>
            <li>
                <label for="mark-pay-02" class="flex items-center">
                    <input type="radio" name="q10" id="mark-pay-02">
                    <img width="200" class="rounded-md" src="{{asset('storage/listening/mark-pay-02.jpg')}}" alt="">
                </label>
            </li>
            <li>
                <label for="mark-pay-03" class="flex items-center">
                    <input type="radio" name="q10" id="mark-pay-03">
                    <img width="200" class="rounded-md" src="{{asset('storage/listening/mark-pay-03.jpg')}}" alt="">
                </label>
            </li>
        </ul>

    </section>
    </div>

</x-layouts.main>
