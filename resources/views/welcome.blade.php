<table style="border-collapse: collapse; width: 100%;">
    <thead>
    <tr>
        <th style="border: 1px solid black; padding: 8px;">Ime</th>
        <th style="border: 1px solid black; padding: 8px;">Ocena</th>
        <th style="border: 1px solid black; padding: 8px;">Profesor</th>
    </tr>
    </thead>
    <tbody>
    @foreach($ocene as $ocena)
        <tr>
            <td style="border: 1px solid black; padding: 8px;">{{ $ocena->predmet }}</td>
            <td style="border: 1px solid black; padding: 8px;">{{ $ocena->ocena }}</td>
            <td style="border: 1px solid black; padding: 8px;">{{ $ocena->profesor }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
