<div>
    @if (count($quizzes) <= 0)
       <p class='text-center text-danger'>No Data Found</p>
    @else
    
        @if(!empty($error))
            <div class="alert alert-danger">
                <p class="text-center"> Quiz marks already Added. </p>
            </div>
        @endif
        <table class="table table-responsive border">
            <thead>
                <tr>
                    <th class="id" scope="col">Id</th>
                    <th class="name" scope="col">Name</th>
                    <th class="quiz" scope="col">Quiz 1</th>
                    <th class="quiz" scope="col">Quiz 2</th>
                    <th class="quiz" scope="col">Quiz 3</th>
                    <th class="quiz" scope="col">Quiz 4</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($quizzes as $key => $quiz)
                    <tr>
                        <td class="id">{{ $quiz->id }}</td>
                        <td class="name">{{ $quiz->student->first_name }} {{ $quiz->last_name }}</td>
                        <td class="quiz">
                            <input type="text" class="form-control-sm form-control" disabled
                                value="{{ $quiz->quiz1 }}">
                        </td>
                        <td class="quiz">
                            <input type="text" class="form-control-sm form-control" disabled
                                value="{{ $quiz->quiz2 }}">
                        </td>
                        <td class="quiz">
                            <input type="text" class="form-control-sm form-control" disabled
                                value="{{ $quiz->quiz3 }}">
                        </td>
                        <td class="quiz">
                            <input type="text" class="form-control-sm form-control" disabled
                                value="{{ $quiz->quiz4 }}">
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

</div>
