<tr>
    <td>{{ $post->created_at }}</td>
    <td>{{ $post->title }}</td>
    <td class="text-right">
        <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-default btn-sm">Edit</a>
        <a href="{{ route('admin.posts.destroy', $post->id) }}" class="btn btn-danger btn-sm">Destroy</a>
    </td>
</tr>
