<div class="bg-light border-right text-right sidenav" id="sidebar-wrapper">

    <div class="sidebar-heading text-right btn-dark dropdown-btn active" style="font-family: 'Kharabeesh'">
        <i class="fa fa-caret-down float-left"></i>&nbsp;
        الشركة&nbsp;
        <i class="fas fa-layer-group"></i>
    </div>
    <div class="list-group list-group-flush text-right dropdown-container ">
        <a href="{{route('companies.index')}}" class="list-group-item list-group-item-action bg-light text-right"style="font-family: 'Ubuntu-Arabic'">شركة سعودية&nbsp;<i class="fas fa-list"></i></a>
    </div>

    <div class="sidebar-heading text-right btn-dark dropdown-btn active" style="font-family: 'Kharabeesh'">
        <i class="fa fa-caret-down float-left"></i>&nbsp;
        الموظفين&nbsp;<i class="fas fa-users"></i></i>
    </div>
    <div class="list-group list-group-flush text-right">
        <a href="{{route('employees.index')}}" class="list-group-item list-group-item-action bg-light text-right"style="font-family: 'Ubuntu-Arabic'">الموظفين&nbsp;<i class="fas fa-pencil-alt"></i></a>
    </div>


</div>

<script>
    //* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
</script>
