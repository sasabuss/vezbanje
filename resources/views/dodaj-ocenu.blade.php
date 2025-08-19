<form action="/upisi-ocenu" method="POST">
    @csrf
    <input required type="text" name="predmet" placeholder="Predmet" >
    <input required type="number" name="ocena" placeholder="Ocena" >
    <input required type="text" name="profesor" placeholder="Profesor" >
    <button>Upisi</button>
</form>
