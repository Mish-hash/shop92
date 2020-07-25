@csrf
        <div class="form-group">
            <label for="name">Category Name</label>
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name', $category->name ?? '')}}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug" class="form-control @error('name') is-invalid @enderror" value="{{old('slug', $category->slug ?? '')}}">
            @error('slug')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            @if (isset($category))
                <img src="{{$category->img}}" alt="" style="width: 150px">
            @endif

            <label for="file">Category image</label>
            <input type="file" name="img" id="file" class="form-control @error('file') is-invalid @enderror">
        </div>
        <button class="btn btn-primary">Save</button>