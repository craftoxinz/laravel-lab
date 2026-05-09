<x-layouts.page>
    <x-slot:pageTitle>Tambah Mahasiswa</x-slot:pageTitle>
    <main>
        <h1>Add a New Student</h1>
        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            <div>
                <label for="name">Name: </label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label for="code">Code: </label>
                <input type="text" name="code" id="code">
            </div>
            <div>
                <label for="major">Major: </label>
                <input type="text" name="major" id="major">
            </div>
            <button type="submit">Save</button>
        </form>
    </main>
</x-layouts.page>
