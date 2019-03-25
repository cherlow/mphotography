<template>
 <ul class="nav navbar-nav">
 
    <li class="dropdown notifications-menu">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-bell-o"></i>

        <span class="label label-warning" v-if="notifications.length > 0">{{notifications.length}}</span>
      </a>
      <ul class="dropdown-menu">
      
        <li>
          <!-- inner menu: contains the actual data -->
          <ul class="menu">
           
            <li v-for="notification in notifications" :key="notification.id">
              
                    <a  v-if="notification.type == 'user'" href="/users" @click="updatenotification(notification.id)">
                      <i class="fa fa-users text-aqua"></i> {{notification.body}}
                    </a>
                    <a v-else-if="notification.type == 'message'" :href="'/readmessage/'+notification.notifier_id" @click="updatenotification(notification.id)">
                      <i class="fa fa-comments text-green"></i>{{notification.notifier_name}} {{notification.body}}
                    </a>
                    <a v-else :href="'showreservation/'+notification.notifier_id"  @click="updatenotification(notification.id)">
                      <i class="fa fa-tasks text-red"></i> {{notification.body}}
                    </a>


                  
                  </li>
          </ul>
        </li>
        
      </ul>

    </li>
       <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="/storage/app_images/avatar04.png" class="user-image" alt="User Image">
              <span class="hidden-xs">  {{user}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="/storage/app_images/avatar04.png" class="img-circle" alt="User Image">

                <p>
                    {{user}} - Administrator
                  <small>Member since {{created}}</small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  
                </div>
                <div class="pull-right">
                  <a href="/logout" class="btn btn-primary btn-flat" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Sign out</a>

                  <form id="logout-form" action="/logout" method="POST" style="display: none;">
                      <input type="hidden" name="_token" :value="csrf"/>
                  </form>

                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
 </ul>
 
</template>

<script>
export default {
    props:['user','created'],
    data(){
        return {
            csrf:document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            notifications:[],
            
        }
    },
    created(){
      this.getnotifications();
      setInterval(()=>this.getnotifications(),3000)
        
        
    },
    methods:{
      getnotifications(){
        axios.get('/api/notifications').then(response =>{
          this.notifications=response.data;
        })
      },
      updatenotification(id){
       
        axios.post('/api/notifications',{notify:id}).then(response=>{
          console.log("viewed");
        })

      }
    }
};
</script>

<style scoped>
</style>
