<div class="row">
    <div class="col-lg-12">
        <h3><?= $title ?></h3>
    </div>
</div>

<hr>

<!-- Example row of columns -->
<div class="row well">
    <div class="col-lg-1">
        <!-- <button type="button" class="btn btn-primary">Add Item</button> -->
        <a data-toggle="modal" href="#myModal" class="btn btn-primary">Add Item</a>
    </div>
    <div class="col-lg-4">
        <div class="input-group input-group-lg=md">
            <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
            <input type="text" class="form-control input-md" placeholder="Search Items">
        </div>
    </div>
    <div class="col-lg-2">
        <select class="form-control">
            <option>All</option>
            <option>Desktop</option>
            <option>Laptop</option>
            <option>Networking</option>
            <option>Printers</option>
        </select>
    </div>
</div>

<hr>

<div class="row">
    <div class="col-lg-12">
        <form action="inventory_submit" method="get" accept-charset="utf-8">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID#</th>
                    <th>Product</th>
                    <th>Category</th>
                    <th>Stock</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>0001</td>
                    <td>Dell Vostro 2250</td>
                    <td>Laptop</td>
                    <td>25</td>
                    <td><button class="btn btn-primary btn-xs">EDIT</button></td>
                </tr>
                <tr>
                    <td>0001</td>
                    <td>Dell Vostro 2250</td>
                    <td>Laptop</td>
                    <td>25</td>
                    <td><button class="btn btn-primary btn-xs">EDIT</button></td>
                </tr>
                <tr>
                    <td>0001</td>
                    <td>Dell Vostro 2250</td>
                    <td>Laptop</td>
                    <td>25</td>
                    <td><button class="btn btn-primary btn-xs">EDIT</button></td>
                </tr>
                <tr>
                    <td>0001</td>
                    <td>Dell Vostro 2250</td>
                    <td>Laptop</td>
                    <td>25</td>
                    <td><button class="btn btn-primary btn-xs">EDIT</button></td>
                </tr>
                <tr>
                    <td>0001</td>
                    <td>Dell Vostro 2250</td>
                    <td>Laptop</td>
                    <td>25</td>
                    <td><button class="btn btn-primary btn-xs">EDIT</button></td>
                </tr>
                <tr>
                    <td>0001</td>
                    <td>Dell Vostro 2250</td>
                    <td>Laptop</td>
                    <td>25</td>
                    <td><button class="btn btn-primary btn-xs">EDIT</button></td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>

<hr>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add Item</h4>
            </div>
            <div class="modal-body">
                <div class="row">


                    <form role="form">
                        <div class="form-group col-lg-12">
                            <label for="name">Name</label>
                            <input type="text" class="form-control"  id="name" placeholder="Enter product name">
                        </div>

                        <div class="form-group col-lg-12">
                            <label for="description">Descripton</label>
                            <textarea class="form-control" name="description" rows="2"></textarea>
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="category">Category</label>
                            <select class="form-control">
                                <option>Select</option>
                                <option>Desktop</option>
                                <option>Laptop</option>
                                <option>Networking</option>
                                <option>Printers</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="stock">Stock#</label>
                            <input type="number" class="form-control" id="stock">
                        </div>

                        <hr>

                        <h4 class="modal-header">Price</h4>

                        <div class="input-group col-lg-3">
                            <label for="week">Week</label>
                            <input type="number" class="form-control" id="week" placeholder="$">
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="month">Month</label>
                            <input type="number" class="form-control" id="month" placeholder="$">
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="3month">3 Month</label>
                            <input type="number" class="form-control" id="3month" placeholder="$">
                        </div>


                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->