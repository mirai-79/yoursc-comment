@php
$user_id = Auth::id();
@endphp
<x-layout>
    <x-container>
        <h3 class="">コメントフォーム</h3>
        <div>
            <form action="{{ route('comment.update', $comment->id) }}" method="post">
                @method('PUT')
                @csrf
                <div>
                    <label for="comment"></label>
                    <div><textarea name="comment" cols="90" rows="10"
                            id="comment">{{ old('comment', $comment->comment) }}</textarea></div>
                </div>
                <input type="submit" value="登録">
            </form>
        </div>
    </x-container>
</x-layout>