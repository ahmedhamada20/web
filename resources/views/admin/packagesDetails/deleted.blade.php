<!-- Modal -->
<div class="modal fade" id="deleted{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">حذف</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('package.destroy','test')}}" method="post" enctype="multipart/form-data">
                    @method('DELETE')
                    @csrf

                    <input type="hidden" value="{{$row->id}}" name="id">

                    <div class="row">
                        <div class="col">
                            <label>هل انت متأكد من عمليه الحذف</label>
                            <input type="text" class="form-control" value="{{$row->name()}}" readonly>
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
