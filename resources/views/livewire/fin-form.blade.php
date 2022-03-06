
<div>
    <form style="margin: 50px;" name="post-form" method="post" action="insertp">
        <div class="form-row">
          <div class="form-group col-md-6" >
            <label for="proj_name">اسم المشروع</label>
            <input type="text" class="form-control" id="proj_name" placeholder="اسم المشروع">
          </div>
          <div class="form-group col-md-6">
            <label for="assig_year" >سنة التخصيص</label>
            <input type="text" class="date-own form-control" id="assig_year" >
          </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
          <label for="proj_cost">الكلفة</label>
          <input type="text" class="form-control" name="proj_cost"id="proj_cost" >
          <span style="color: red">@error('proj_cost'){{$message}}@enderror</span>
              
          @enderror
        </div>
        <div class="form-group col-md-6">
          <label for="fina_type">نوع التمويل</label>
          <input type="text" class="form-control" id="fina_type" placeholder="تشغيلي, قروض , استثماري , اخرى">
        </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="fina_amnt_loc">تخصيص التبويب/عملة محلية </label>
            <input type="text" class="form-control" id="fina_amnt_loc">
          </div>
          <div class="form-group col-md-6">
            <label for="fina_amnt_for">تخصيص التبويب/عملة اجنبية </label>
            <input type="text" class="form-control" id="fina_amnt_for">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="fina_classfic">التبويب الحسابي </label>
            <input type="text" class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-6">
            <label for="notes">الملاحظات</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          </div>
        </div> 
        
       
        <input class="btn btn-primary" type="reset" value="مسح">
        <button type="submit" class="btn btn-primary">حفظ</button>
       
      </form>
</div>
