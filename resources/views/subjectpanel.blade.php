<section class="subjectpanel">
<h3 class="text-muted  mb-3">Subject management</h3>
                <table class="table table-striped bg-light text-center table-hover" id="examtable">
                	<thead>
                		<tr>
                			<th colspan="3" class="text-left">Exam List</th>
                			<th class="text-right mr-3" colspan="3" ><button type="button" class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#NewExam" id="AddSession"><i class="fas fa-plus"></i></button></th>
                		</tr>
                	</thead>




                  <thead>
                    <tr class="text-muted">
                      <th>Exam ID</th>
                      <th>Exam Name</th>
                      <th>Exam Year</th>
                      <th>Exam added on</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($exams as $exam)
                    <tr>
                      <th>{{$exam->id}}</th>
                      <td>{{$exam->exam_name}}</td>
                      <td>{{$exam->year}}</td>
                      <td>{{ \Carbon\Carbon::parse($exam->created_at)->format('d-m-Y')}}</td>
                      <td><button type="button" class="btn btn-warning btn-sm">Edit</button></td>
                      <td><button type="button" class="btn btn-danger btn-sm">Delete</button></td>
                    </tr>

                    @endforeach
                    
                  </tbody>
                </table>

                <!-- pagination -->
                <nav>
                  <ul class="pagination justify-content-center">
                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        <span>&laquo;</span>
                      </a>
                    </li>
                    <li class="page-item active">
                      <a href="#" class="page-link py-2 px-3">
                        1
                      </a>
                    </li>
                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        2
                      </a>
                    </li>
                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        3
                      </a>
                    </li>
                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        <span>&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>
                <!-- end of pagination -->

    </section>
    <!-- end of tables -->
