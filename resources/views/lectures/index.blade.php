<x-layouts.page>
    <x-slot:pageTitle>Daftar Dosen</x-slot:pageTitle>
    <h1>Daftar Dosen</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIP</th>
        </tr>

        @php
            /**
             * @var \Illuminate\Database\Eloquent\Collection<App\Models\Lecture> $lectures
             */
        @endphp
        @foreach ($lectures as $lecture)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $lecture->name }}</td>
                <td>{{ $lecture->code }}</td>
            </tr>
        @endforeach
    </table>
</x-layouts.page>
