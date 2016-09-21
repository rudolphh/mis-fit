@section('scripts')
<script type="text/javascript">

$("#activity_mult").prop('readonly', 
  !($('#activity_level option:selected').val() == 'E')); 

// select on change
$("#activity_level").on("change", function(e){
  if(!e.originalEvent){
    return;
  }

  switch(this.value) {

    case 'A': $("#activity_mult").val('1.10'); break;
    case 'B': $("#activity_mult").val('1.20'); break;
    case 'C': $("#activity_mult").val('1.35'); break;
    case 'D': $("#activity_mult").val('1.45'); break;
    case 'E': break;
  } 
  $("#activity_mult").prop('readonly', !(this.value == 'E')); 

});

// input on change
$("#activity_mult").on("change", function(e){
  if(!e.originalEvent){
    return;
  }
});

 var originalForm = $('.form-horizontal').serialize();

 $('.form-horizontal').submit(function(){
        
        var currentForm = $('.form-horizontal').serialize();
        if(originalForm == currentForm){
            $("#myModal").modal({backdrop: true});
            $(".modal-footer button").focus();
            return false;
        }
    });

</script>

@stop
