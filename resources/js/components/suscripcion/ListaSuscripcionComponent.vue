<template>
  <div class="">

  <section class="content-header">
    <h1>
      Sucripciones
      <small>Listas</small>
    </h1>
    <ol class="breadcrumb">
      <li>
        <<router-link to="/ixtus">
          <i class="fa fa-dashboard"></i> Dashboard
        </router-link>
      </li>
      <li class="active" ><i class="fa fa-book"></i>Mis suscripciones</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content container-fluid">
    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Listado de Artículos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Titulo</th>
                  <th>Descripcion</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
  </section>
  </div>
</template>

<script>
import datatable from 'datatables'

export default {
  mounted() {
      console.log('Component mounted.')
  },
  created(){
    $(document).ready( function () {
        $('#example1').DataTable({
          "serverSide":true,
          "ajax":"api/suscripciones",
          "columns":[
            {data:'nombre_recibe'},
            {data:'pais'},
          ]
        });
    } );
  },
  data(){
    return{
      sus:[]
    }
  },
  methods:{
    getSuscripciones(){
      axios.get('/suscripciones').then(res =>{
          console.log(res.data);
          this.sus = res.data;
      });
    }
  }

}



</script>
