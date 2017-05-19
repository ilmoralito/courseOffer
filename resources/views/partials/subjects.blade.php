<table class="table is-bordered">
    <colgroup>
        <col span="1" style="width: 25%;">
        <col span="1" style="width: 75%;">
    </colgroup>

    <thead>
        <tr>
            <th>Tema</th>
            <th>Cursos</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($subjects as $subject)
            <tr>
                <td rowspan="{{ count($subject['courses']) + 1 }}">
                    {{ $subject['name'] }}
                </td>
            </tr>

            @foreach ($subject['courses'] as $course)
                <tr>
                    <td>
                        <a href="">{{ $course }}</a>
                    </td>
                </tr>
            @endforeach
        @endforeach
    </tbody>
</table>
