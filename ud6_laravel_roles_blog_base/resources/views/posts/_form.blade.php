{{ csrf_field() }}

<div class="form-group" >
    <label>Title</label>
    <input type="text" name="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : ''}}" placeholder="Enter title" value="{{old('title',$post->title)}}">
    {!! $errors->first('title','<span class="invalid-feedback ">:message</span>') !!}
</div>
<div class="form-group">
    <label>Description</label>
    <textarea name="excerpt" class="form-control {{ $errors->has('excerpt') ? 'is-invalid' : ''}}" placeholder="Enter Excerpt">{{old('excerpt',$post->excerpt)}}</textarea>
    {!! $errors->first('excerpt','<span class="invalid-feedback ">:message</span>') !!}
</div>
<div class="form-group">
    <label class="control-label" for="inputError">Body</label>
    <textarea rows="5" name="body" class="form-control {{ $errors->has('body') ? 'is-invalid' : ''}}" placeholder="Enter Body">{{old('body',$post->body)}}</textarea>
    {!! $errors->first('body','<span class="invalid-feedback ">:message</span>') !!}
</div>
<div class="form-group">
    <label>Category</label>
    <select name="category" class="form-control {{ $errors->has('category') ? 'is-invalid' : ''}}">
        <option value="">Select a category</option>
        @foreach ($categories as $category)
            <option value="{{$category->id}}" {{ old('category',$post->category_id) == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
        @endforeach
    </select>
    {!! $errors->first('category','<span class="invalid-feedback ">:message</span>') !!}
</div>
<div class="form-group">
    <label>Image</label>
    <input type="file" name="img" class="form-control {{ $errors->has('img') ? ' is-invalid' : '' }}">
    {!! $errors->first('img','<span class="invalid-feedback "><strong>:message</strong></span>') !!}
</div>

<button type="submit" class="btn btn-secondary">{{$btnText}}</button>
