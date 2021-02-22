<form  class="m-4" action="{{ Your Route }}" method="POST">
            <h3 class="m-4 p-4">Add Contact</h3>
            @csrf

            
               
                
                <div class="form-group">
                    <label for="name">Contact Name:</label>
                    <input type="text" class="form-control" placeholder="Enter Contact Name" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" placeholder="Enter Address" name="address" id="address">
                </div>

                

                <div class="field_wrapper form-group">
                <p>Phone Number :</p>
                    <div" class="my-3">
                        <input style="width:60%; display:inline;float:left;" type="text" class="form-control"  name="phone_number[]"  placeholder="Enter Phone Number" value=""/>
                        <a href="javascript:void(0);" class="add_button" title="Add field"><img style="height:28px;" src="https://pngimg.com/uploads/plus/plus_PNG102.png"/></a>
                    </div>
                </div>

                

                <div class="text-center form-group" >
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

        
                
            </form>

   //Script

<script type="text/javascript">
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div class="my-4"><input style="width:60%; display:inline;float:left;" type="text" class="form-control" placeholder="Enter Phone Number"  name="phone_number[]" value=""/><a href="javascript:void(0);" class="remove_button"><img style="height:30px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3a/Ambox_emblem_minus.svg/1200px-Ambox_emblem_minus.svg.png"/></a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>



