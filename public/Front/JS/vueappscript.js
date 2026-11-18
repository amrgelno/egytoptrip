new Vue(
    { el: "#app",
     data: { users: [] }, 
    methods: 
    { 
    getUser() { 
    const URL="js/example.php";
     axios.
     get(URL) .
     then(res => { this.users = res.data.data; }) }  }
    , mounted() { this.getUser(); }, 
    
    })
        
     

    
    
    //       new Vue({
               
    //              el: "#app",                          // Data Centre
                      
    //                 data: {  
                      
          
        
    //          users:[
          
              
    //       {
    //   Name: "AmrHassan",
    //   email: "hello@cypress.io",
    //   Post: "Fixtures are a great way to mock data for responses to routes"
    // },
            
                     
    //                 ]    
    //       }})
             
                 