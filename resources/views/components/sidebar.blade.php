<div class="col-sm-3">
    <div class="left-sidebar">
        <h2>Category</h2>
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
            @foreach ($categories as $category)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordian" href="#category{{ $category->id }}">
                                {{ $category->name }}
                            </a>
                        </h4>
                    </div>
                    <div id="category{{ $category->id }}" class="panel-collapse collapse">
                    </div>
                </div>
            @endforeach
        </div><!--/category-products-->
    </div>
</div>
