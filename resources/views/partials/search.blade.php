<div class="container-fluid">
    <div class="row w-50">
        <div id="custom-search-input" class="col-12 align-content-center">
            <form action="{{ route('products.search') }}" class="d-flex mr-3">
                <div class="input-group col-md-12 mt-3">
                    <input type="text" name="q" class="search-query form-control" placeholder="Rechercher par titre" />
                    <span class="input-group-btn">
                        <button class="btn btn-danger" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
