<x-layouts.page>
    <x-slot:pageTitle>Daftar Mahasiswa</x-slot:pageTitle>
    <main>
        <h1>Daftar Mahasiswa</h1>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>

            @php
                /**
                 * @var \Illuminate\Database\Eloquent\Collection<App\Models\Student> $students
                 */
            @endphp
            @foreach ($students as $student)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->code }}</td>
                    <td>{{ $student->major }}</td>
                    <td>
                        <button>
                            <a href="{{ route('students.edit', $student) }}">Edit</a>
                        </button>
                        <form action="{{ route('students.destroy', $student) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <a href="{{ route('students.create') }}">Tambah</a>
    </main>
</x-layouts.page>
