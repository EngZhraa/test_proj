<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.0.0/css/bootstrap.min.css" integrity="sha384-P4uhUIGk/q1gaD/NdgkBIl3a6QywJjlsFJFk7SPRdruoGddvRVSwv5qFnvZ73cpz" crossorigin="anonymous">
    @livewireStyles
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <body>
      <div class="row">
        <div class="col-md-2"></div>
          <div class="col-md-8">
            @if ($errors->any())
              <div class="alert alert-danger">
              <ul>
              @foreach ($errors->all() as $error)
                  <h6>{{ $error }}</h6>
              @endforeach
          </ul>
      </div>
      @endif
      </div>
      <div>
        <form style="margin: 50px;"  method="post" action="store">
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
            {{ csrf_field() }}
          </form>
    </div>
    
      <script
			  src="https://code.jquery.com/jquery-3.6.0.min.js"
			  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
			  crossorigin="anonymous"></script>
       
@livewireStyles  
</body>
</html>
