<form action="{{ route('user.destroy', $user->id) }}" method="post">
    @csrf
    {{ method_field('DELETE') }}
</form>