<!-- Modal For Add Course -->
<div class="modal fade" id="modalForAddCourse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <form class="refreshFrm" id="addCourseFrm" method="post">
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Добавяне на курс</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <div class="form-group">
            <label>Курс</label>
            <input type="" name="course_name" id="course_name" class="form-control" placeholder="Input Course" required="" autocomplete="off">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Изход</button>
        <button type="submit" class="btn btn-primary">Добавяне</button>
      </div>
    </div>
   </form>
  </div>
</div>


<!-- Modal For Update Course -->
<div class="modal fade myModal" id="updateCourse-<?php echo $selCourseRow['cou_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
     <form class="refreshFrm" id="addCourseFrm" method="post" >
       <div class="modal-content myModal-content" >
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Обновяване ( <?php echo $selCourseRow['cou_name']; ?> )</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="col-md-12">
            <div class="form-group">
              <label>Курс</label>
              <input type="" name="course_name" id="course_name" class="form-control" value="<?php echo $selCourseRow['cou_name']; ?>">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Изход</button>
          <button type="submit" class="btn btn-primary">Обновяване</button>
        </div>
      </div>
     </form>
    </div>
  </div>


<!-- Modal For Add Exam -->
<div class="modal fade" id="modalForExam" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <form class="refreshFrm" id="addExamFrm" method="post">
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Добавете изпит</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <div class="form-group">
            <label>Изберете курс</label>
            <select class="form-control" name="courseSelected">
              <option value="0">Изберете курс</option>
              <?php 
                $selCourse = $conn->query("SELECT * FROM course_tbl ORDER BY cou_id DESC");
                if($selCourse->rowCount() > 0)
                {
                  while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                     <option value="<?php echo $selCourseRow['cou_id']; ?>"><?php echo $selCourseRow['cou_name']; ?></option>
                  <?php }
                }
                else
                { ?>
                  <option value="0">Курсът не е намерен</option>
                <?php }
               ?>
            </select>
          </div>

          <div class="form-group">
            <label>Времетраене на изпит</label>
            <select class="form-control" name="timeLimit" required="">
              <option value="0">Изберете минути</option>
              <option value="10">10 минути</option> 
              <option value="20">20 минути</option> 
              <option value="30">30 минути</option> 
              <option value="40">40 минути</option> 
              <option value="50">50 минути</option> 
              <option value="60">60 минути</option> 
            </select>
          </div>

          <div class="form-group">
            <label>Време на въпрос</label>
            <input type="number" name="examQuestDipLimit" id="" class="form-control" placeholder="Въведете време на въпрос">
          </div>

          <div class="form-group">
            <label>Тема на изпит</label>
            <input type="" name="examTitle" class="form-control" placeholder="Въведете тема на изпита" required="">
          </div>

          <div class="form-group">
            <label>Описание на изпит</label>
            <textarea name="examDesc" class="form-control" rows="4" placeholder="Въведете описание на изпита" required=""></textarea>
          </div>


        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Изход</button>
        <button type="submit" class="btn btn-primary">Добавяне</button>
      </div>
    </div>
   </form>
  </div>
</div>


<!-- Modal For Add Examinee -->
<div class="modal fade" id="modalForAddExaminee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <form class="refreshFrm" id="addExamineeFrm" method="post">
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Добавете курсист</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <div class="form-group">
            <label>Име</label>
            <input type="" name="fullname" id="fullname" class="form-control" placeholder="Име, презиме, фамилия" autocomplete="off" required="">
          </div>
          <div class="form-group">
            <label>Дата на раждане</label>
            <input type="date" name="bdate" id="bdate" class="form-control" placeholder="Въведете дата на раждане" autocomplete="off" >
          </div>
          <div class="form-group">
            <label>Пол</label>
            <select class="form-control" name="gender" id="gender">
              <option value="0">Изберете пол</option>
              <option value="male">Мъж</option>
              <option value="female">Жена</option>
            </select>
          </div>
          <div class="form-group">
            <label>Курс</label>
            <select class="form-control" name="course" id="course">
              <option value="0">Изберете курс</option>
              <?php 
                $selCourse = $conn->query("SELECT * FROM course_tbl ORDER BY cou_id asc");
                while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                  <option value="<?php echo $selCourseRow['cou_id']; ?>"><?php echo $selCourseRow['cou_name']; ?></option>
                <?php }
               ?>
            </select>
          </div>
          <div class="form-group">
            <label>Ниво</label>
            <select class="form-control" name="year_level" id="year_level">
              <option value="0">Изберете ниво на знание</option>
              <option value="first year">Първо ниво</option>
              <option value="second year">Второ ниво</option>
              <option value="third year">Трето ниво</option>
              <option value="fourth year">Четвърто ниво</option>
            </select>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Въведете имейл" autocomplete="off" required="">
          </div>
          <div class="form-group">
            <label>Парола</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Въведете парола" autocomplete="off" required="">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Изход</button>
        <button type="submit" class="btn btn-primary">Добавяне</button>
      </div>
    </div>
   </form>
  </div>
</div>



<!-- Modal For Add Question -->
<div class="modal fade" id="modalForAddQuestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <form class="refreshFrm" id="addQuestionFrm" method="post">
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Добавете въпрос <br><?php echo $selExamRow['ex_title']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="refreshFrm" method="post" id="addQuestionFrm">
      <div class="modal-body">
        <div class="col-md-12">
          <div class="form-group">
            <label>Въпрос</label>
            <input type="hidden" name="examId" value="<?php echo $exId; ?>">
            <input type="" name="question" id="course_name" class="form-control" placeholder="Въведете въпрос" autocomplete="off">
          </div>

          <fieldset>
            <legend>Въведете възможен избор</legend>
            <div class="form-group">
                <label>A</label>
                <input type="" name="choice_A" id="choice_A" class="form-control" placeholder="Въведете подточка А" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Б</label>
                <input type="" name="choice_B" id="choice_B" class="form-control" placeholder="Въведете подточка Б" autocomplete="off">
            </div>

            <div class="form-group">
                <label>В</label>
                <input type="" name="choice_C" id="choice_C" class="form-control" placeholder="Въведете подточка В" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Г</label>
                <input type="" name="choice_D" id="choice_D" class="form-control" placeholder="Въведете подточка Г" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Верен отговор</label>
                <input type="" name="correctAnswer" id="" class="form-control" placeholder="Въведете верния отговор" autocomplete="off">
            </div>
          </fieldset>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Изход</button>
        <button type="submit" class="btn btn-primary">Добавяне</button>
      </div>
      </form>
    </div>
   </form>
  </div>
</div>