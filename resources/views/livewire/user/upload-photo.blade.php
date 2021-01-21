<div>
    <h1>Atualizar Foto Perfil</h1>

    <form action="#" method="post" wire:submit.prevent="storagePhoto">
        <input type="file" name="photo" id="photo" wire:model="photo">
        @error('photo') @enderror
        <br>
        <button type="submit">Upload Foto</button>
    </form>

</div>
