<div class="form1">
    <form action="{{'store'}}" methode="post">
        @csrf
        <input name="search" placeholder="Search Client">
        <div class="form_grid">
            <div class="row-1">
                <input name="projectname" type="text" placeholder="Project Name" required><br>
                <input name="startdate" type="date" placeholder="Start Date"><br>
                <input name="enddate" type="date" placeholder="End Date">
                <input type="submit" value="save">
            </div>
            <div class="row-2">
                <textarea name="description" placeholder="Description"></textarea><br>
                <textarea name="system_details" placeholder="System Details"></textarea><br>
                <textarea name="comment" placeholder="Comment"></textarea>
            </div>
        </div>
    </form>
</div>