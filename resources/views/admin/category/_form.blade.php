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
        
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control"></textarea>
            
        </div>

        <div class="input-group">
            <span class="input-group-btn">
              <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                <i class="fa fa-picture-o"></i> Choose
              </a>
            </span>
            <input id="thumbnail" class="form-control" type="text" name="filepath">
          </div>
          <div id="holder" style="margin-top:15px;max-height:100px;"></div>

        <button class="btn btn-primary">Save</button>