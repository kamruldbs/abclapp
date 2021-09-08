<template>
<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title" style="text-align:center!important">Course Entry Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form @submit.prevent="submitFile()">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                          <label for="xtitle" style="color: red;">Course Title</label>
                          <input type="text" class="form-control" v-model="title" id="xtitle" name="xtitle" placeholder="Enter Course Title">

                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label for="xdesc">Description</label>
                          <input type="text" class="form-control" v-model="desc" id="xdesc" name="xdesc" placeholder="Description" >

                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label for="xtype">Course Type</label>
                          <input type="text" class="form-control" v-model="type" id="xtype" name="xtype" placeholder="Course Type">

                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label for="xmentor">Course Mentor</label>
                          <input type="text" class="form-control" v-model="mentor" id="xmentor" name="xmentor" placeholder="Course Mentor">

                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" value="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
</template>

<script>

    export default {
        props:{
        },
        data:()=>({
            title:"",
            desc:"",
            type:"",
            mentor:"",
        }),

        created(){

        },
        methods:{

            submitFile(){


                let formData = new FormData();
                formData.append('xtitle', this.title);
                formData.append('xdesc', this.desc);
                formData.append('xtype', this.type);
                formData.append('xmentor',this.mentor);
                // formData.append('level', this.level);

                axios.post( '/courseCreate',
                    formData,
                    {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }
                ).then((res)=>{

                this.$alert(
                res.data.message,
                "",
                "success"
                );

                }).catch();

            },
        },
    }
</script>
