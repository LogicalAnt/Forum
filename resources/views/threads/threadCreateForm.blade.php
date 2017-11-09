<div class="well">
    <form class="form-inline" action={{"#"}} method="post" id="reply" >
        {{csrf_field()}}
        <div class="form-group">
                        <textarea  name="reply" class="form-control" rows="3" cols="110" style="resize: none" placeholder="Say somthing..." required>
                        </textarea>

            <select class="js-example-basic-single" name="state">
                <option value="AL">Alabama</option>
                ...
                <option value="WY">Wyoming</option>
            </select>

        </div>
    </form>
</div>

