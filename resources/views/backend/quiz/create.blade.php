<div>
    @if (count($students) == 0)
        <tr>
            <td colspan="6" class="text-center">No Data Found</td>
        </tr>
    @else
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
                @foreach ($students as $key => $student)
                    <tr>
                        <td class="id">{{ $student->id }}</td>
                        <input type="hidden" name="student_id[{{ $key }}]" value="{{ $student->id }}">

                        <td class="name">{{ $student?->student?->user?->name }} </td>
                        <td class="quiz">
                            <input type="text" class="form-control-sm form-control"
                                name="quiz1[{{ $key }}][]" placeholder="Quiz 1">
                        </td>
                        <td class="quiz">
                            <input type="text" class="form-control-sm form-control"
                                name="quiz2[{{ $key }}][]" placeholder="Quiz 2">
                        </td>
                        <td class="quiz">
                            <input type="text" class="form-control-sm form-control"
                                name="quiz3[{{ $key }}][]" placeholder="Quiz 3">
                        </td>
                        <td class="quiz">
                            <input type="text" class="form-control-sm form-control"
                                name="quiz4[{{ $key }}][]" placeholder="Quiz 4">
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        <button type="submit" class="btn btn-success" style="margin-left: 15px"> Submit</button>
    @endif
</div>
