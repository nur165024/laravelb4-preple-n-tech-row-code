<div class="form-group">
    <label">Enter Your Title</label>
    <input name="title" value="@isset($post) {{ $post->title }} @endisset" type="text" class="form-control" placeholder="Enter Your Title">
</div>

<div class="form-group">
    <label">Enter Your Title</label>
    <textarea name="details" class="form-control" placeholder="Details" rows="6">@isset($post) {{ $post->details }} @endisset</textarea>
</div>
