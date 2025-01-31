<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">اضافه جديده</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('packagesDetails.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" value="{{$data->id}}" name="package_id">

                    <div class="row">
                        <div class="col">
                            <label>الاسم بالعربي</label>
                            <input type="text" class="form-control" name="name_ar" required>
                        </div>

                        <div class="col">
                            <label>الاسم بالانجليزي</label>
                            <input type="text" class="form-control" name="name_en" required>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <label>العنوان بالعربي</label>
                            <input type="text" class="form-control" name="title_ar" required>
                        </div>

                        <div class="col">
                            <label>العنوان بالانجليزي</label>
                            <input type="text" class="form-control" name="title_en" required>
                        </div>
                    </div>

                    <br>


                    <div class="row">
                        <div class="col">
                            <label>الوصف بالعربي</label>
                            <textarea class="form-control" name="description_ar" rows="5"></textarea>
                        </div>
                    </div>

                    <br>



                    <div class="row">
                        <div class="col">
                            <label>الوصف بالانجليزي</label>
                            <textarea class="form-control" name="description_en" rows="5"></textarea>
                        </div>
                    </div>



                    <br>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                        <button type="submit" class="btn btn-primary">حفظ</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
