<div class="row">
    <div class="pull-left">
        <h2> Show book</h2>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>title:</strong>
            {{ $book->title }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>author:</strong>
            {{ $book->author }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>description:</strong>
            {{ $book->description }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 margin-tb">

        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('books.index') }}"> Back</a>
        </div>
    </div>
</div>