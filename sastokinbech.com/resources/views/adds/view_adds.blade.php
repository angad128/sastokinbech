
@extends('user_layouts.master')

@section('contents')
	<div class="container-fluid">
  <div class="row-fluid">
    <div class="span12">
    	
       <div class="widget-box">
       		
            <div class="widget-title" style="margin-top: 20px; "> <span class="icon"><i class="icon-th"></i></span>
                  
                  <a  href="{{route('adds.createadds')}}" class="pull-right btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>Post Your Adds</a>
                </div><br /><br />
                <?php if (count($add_data)>0) {?>
                <h3>Your Total Adds</h3>
                <div class="widget-content">
                  <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
                  <table class="table table-bordered data-table dataTable" id="DataTables_Table_0">
                    <thead>
                      <tr role="row">
                      <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 202px;"><div class="DataTables_sort_wrapper">S.N.<span class="DataTables_sort_icon css_right ui-icon ui-icon-triangle-1-n"></span></div></th>

                      <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 329px;"><div class="DataTables_sort_wrapper">
                      Add Title<span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span></div></th>

                      <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 299px;"><div class="DataTables_sort_wrapper">
                      Add Images <span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span></div></th>

                      <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 299px;"><div class="DataTables_sort_wrapper">
                      Category <span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span></div></th>

                      <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 299px;"><div class="DataTables_sort_wrapper">
                      Sub-Category <span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span></div></th>

                      <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Engine : activate to sort column ascending" style="width: 173px;"><div class="DataTables_sort_wrapper">Description<span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span></div></th>

                      <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 299px;"><div class="DataTables_sort_wrapper">
                      Price<span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span></div></th>

                      <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 299px;"><div class="DataTables_sort_wrapper">
                      Posted On <span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span></div></th>                  

                      <span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span></div></th>
                      <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Engine : activate to sort column ascending" style="width: 173px;"><div class="DataTables_sort_wrapper">Action<span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span></div></th>
                      </tr>
                    </thead>
                    
                  <tbody role="alert" aria-live="polite" aria-relevant="all">
                  <?php $i=1; foreach($add_data as $key){ ?>

                    <tr <?php if($i%2==0){ ?> class="gradeA odd" <?php }else{ ?> class="gradeA even" <?php } ?>>
                        <td class="  sorting_1"><?php echo $i ?></td>
                        <td class=" ">{{$key->title}} <br></td>
                        <td><img class="lazy" src="/upload/<?=$key['category']?>/<?=$key['subcategory']?>/<?=$key['image']?>" style="height:60px ; width: 80px;"> </td>
                        <td><?=$key['category']?></td>
          				    	<td><?=$key['subcategory']?></td>
          				    	<td><?=$key['description']?></td>
          				    	<td>RS. <?=$key['price']?></td>
          				    	<td><?=$key['created_at']?></td>
                        
                        <td><a href="{{ URL::to('Adds/' . $key->id . '/edit') }}"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>    <a type="select"  onclick="showConfirm(<?=$key->id ?>);"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                      </tr>
                      </tbody>
                 <?php $i++;} ?>
                  </table>
                  
                  </div>
                </div>
                <?php }else{ ?>
                    <h1>No Add Posted yet!!</h1>
                <?php } ?>

      </div>
    </div>
  </div>
</div>

  
@stop
@section('scripts')
   <script type="text/javascript">
        $(function() {
            $("img.lazy").lazyload();
        });
        
    </script>
  <script type="text/javascript">

  function showConfirm(id,control){
    bootbox.confirm({
      message: "Are you sure you want to delete?",
      buttons: {
          confirm: {
              label: 'Yes',
              className: 'btn-success'
          },
          cancel: {
              label: 'No',
              className: 'btn-danger'
          }
      },
      callback: function(result){ /* result is a boolean; true = OK, false = Cancel*/
            if(result){
              $.get('/Adds/delete/'+id,function(){
                location.reload(true);
              });
            }
      }

  });
  }

</script>
@stop