@csrf
<label for="title">Title</label>
<input type="text" name="title" value="{{ old('title', $post->title ) }}" id="">

<label for="slug">Slug</label>
<input type="text" name="slug" value="{{ old('slug', $post->slug ) }}" id="">

<label for="description">Description</label>
<input type="text" name="description" value="{{ old('description', $post->description) }}" id="">


<label for="content">Content</label>
<textarea name="content" id="" cols="30" rows="10">{{ old('content', $post->content) }}</textarea>


<label for="category_id">Category</label>
<select name="category_id" id="">
    @foreach ($categories as $category)
        <option value="{{ $category->id }}" {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
            {{ $category->title }}</option>
    @endforeach
</select>

<label for="image">Image</label>
<input type="textarea" name="image" value="{{ old('image', $post->image) }}" id="">

<label for="posted">Posted</label>
<select name="posted" id="">
    <option value="yes" {{ old('posted', $post->posted) == 'yes' ? 'selected' : '' }}>Yes</option>
    <option value="no" {{ old('posted', $post->posted) == 'no' ? 'selected' : '' }}>No</option>
</select>



<button type="submit">Guardar</button>
