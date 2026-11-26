@props(['route'])

<form action="{{ $route }}" method="POST"
      onsubmit="return confirm('Are you sure you want to delete this record?')">
    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger">
        Delete
    </button>
</form>
