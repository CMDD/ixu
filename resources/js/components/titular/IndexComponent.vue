<template>
  <div class="">
  <section class="content-header">
    <h1>
      Titulares
      <small>Lista</small>
    </h1>
    <ol class="breadcrumb">
      <li>
        <router-link to="/dashboard">
          <i class="fa fa-dashboard"></i> Dashboard
        </router-link>
      </li>
      <li class="active" ><i class="fa fa-book"></i>Mis Titulares</li>
    </ol>
  </section>
  <section class="content container-fluid">
    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Listado de Titulares</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="datatable-suscripciones" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nombres</th>
                  <th>Apellidos</th>
                  <th>Teléfono</th>
                  <th>Cedula</th>
                  <th>Acción</th>
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
export default {
  mounted() {
      console.log('Component mounted.')
  },
  created(){
    $(document).ready( function () {
        $('#datatable-suscripciones').DataTable({
          "serverSide":true,
          "ajax":"api/titulares",
          "columns":[
            {data:'nombres'},
            {data:'apellidos'},
            {data:'telefono'},
            {data:'cedula'},
            {data:'btn'},
          ],
          "language":{
            'url':'css/spanish.json'
          }
        });
    } );
  },
  data(){
    return{
      sus:[]
    }
  },
  methods:{

  }
}
</script>

<style lang="css">
</style>
