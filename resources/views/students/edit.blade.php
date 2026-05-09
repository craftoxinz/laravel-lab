<x-layouts.page>
    <x-slot:pageTitle>Edit Mahasiswa</x-slot:pageTitle>
    <main>
         <h1>Edit Mahasiswa</h1>
        <form action="{{ route('students.update', $student) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="name">Name: </label>
                <input type="text" name="name" id="name" value="{{ old('name', $student->name) }}">
            </div>
            <div>
                <label for="code">Code: </label>
                <input type="text" name="code" id="code" value="{{ old('code', $student->code) }}">
            </div>
            <div>
                <label for="major">Major: </label>
                <input type="text" name="major" id="major" value="{{ old('major', $student->major) }}">
            </div>
            <button type="submit">Save</button>
        </form>
    </main>
</x-layouts.page>
