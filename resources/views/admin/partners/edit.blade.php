<!-- Modal -->
<div class="modal fade" id="exampleModal{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">تعديل البيانات</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('our-partners.update','test')}}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <input type="hidden" value="{{$row->id}}" name="id">

                    <div class="row">
                        <div class="col">
                            <label>الاسم بالعربي</label>
                            <input type="text" class="form-control" name="name_ar" value="{{$row->name_ar}}" required>
                        </div>

                        <div class="col">
                            <label>الاسم بالانجليزي</label>
                            <input type="text" class="form-control" name="name_en" value="{{$row->name_en}}" required>
                        </div>
                    </div>



                    <br>


                    <div class="row">
                        <div class="col">
                            <label>الصوره</label>
                            @if($row->photo)
                                <img src="{{ asset('storage/' . $row?->photo?->filename) }}" width="180px" height="180px" alt="">

                            @endif
                            <input type="file" accept="image/*" name="image"  class="form-control">
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
