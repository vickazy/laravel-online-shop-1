<a href="{{ $url_show }}" class="image" title="Gambar: {{ $model->product_name }}"><i class="fa fa-file-image-o text-dark"></i></a> |
<a href="{{ $url_show }}" class="show" title="Detail: {{ $model->product_name }}"><i class="fa fa-eye text-secondary"></i></a> |
<a href="{{ $url_edit }}" class="edit" title="Edit > {{ $model->product_name }}"><i class="fa fa-pencil text-primary"></i></a> |
<a href="{{ $url_destroy }}" class="btn-delete" title="Hapus > {{ $model->product_name }}"><i class="fa fa-trash-o text-danger" aria-hidden="true"></i></i></a> 