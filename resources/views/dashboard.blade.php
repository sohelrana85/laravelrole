@extends('layouts.app', ['title' => 'Dashboard'])

@section('content')
<div class="mail-box">
    <aside class="sm-side">
        <div class="user-head">
            <a href="javascript:;" class="inbox-avatar">
                <img src="{{asset('materials')}}/img/mail-avatar.jpg" alt="">
            </a>
            <div class="user-name">
                <h5><a href="#">Jonathan Smith</a></h5>
                <span><a href="#">jsmith@gmail.com</a></span>
            </div>
            <a href="javascript:;" class="mail-dropdown float-right">
                <i class="fa fa-chevron-down"></i>
            </a>
        </div>
        <div class="inbox-body">
            <a class="btn btn-compose" data-toggle="modal" href="#myModal">
                Compose
            </a>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Compose</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" role="form">
                                <div class="form-group row">
                                    <label class="col-lg-2 control-label">To</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="inputEmail1" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 control-label">Cc / Bcc</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="cc" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 control-label">Subject</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="inputPassword1" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 control-label">Message</label>
                                    <div class="col-lg-10">
                                        <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <span class="btn green fileinput-button">
                                            <i class="fa fa-plus fa fa-white"></i>
                                            <span>Attachment</span>
                                            <input type="file" multiple="" name="files[]">
                                        </span>
                                        <button type="submit" class="btn btn-send">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
        <ul class="inbox-nav inbox-divider">
            <li class="active">
                <a href="#"><i class="fa fa-inbox"></i> Inbox <span class="badge badge-danger float-right mt-3">2</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-envelope-o"></i> Sent Mail</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bookmark-o"></i> Important</a>
            </li>
            <li>
                <a href="#"><i class=" fa fa-external-link"></i> Drafts <span class="badge badge-info float-right mt-3">30</span></a>
            </li>
            <li>
                <a href="#"><i class=" fa fa-trash-o"></i> Trash</a>
            </li>
        </ul>
        <ul class="nav flex-column labels-info inbox-divider">
            <li class="nav-item">
                <h4 class="mt-2">Labels</h4>
            </li>
            <li class="nav-item"> <a href="#" class="nav-link"> <i class=" fa fa-sign-blank text-danger"></i> Work </a> </li>
            <li class="nav-item"> <a href="#" class="nav-link"> <i class=" fa fa-sign-blank text-success"></i> Design </a> </li>
            <li class="nav-item"> <a href="#" class="nav-link"> <i class=" fa fa-sign-blank text-info "></i> Family </a>
            <li class="nav-item"> <a href="#" class="nav-link"> <i class=" fa fa-sign-blank text-warning "></i> Friends </a>
            <li class="nav-item"> <a href="#" class="nav-link"> <i class=" fa fa-sign-blank text-primary "></i> Office </a>
            </li>
        </ul>
        <ul class="nav flex-column labels-info ">
            <li class="nav-item">
                <h4 class="mt-2">Buddy online</h4>
            </li>
            <li class="nav-item"> <a href="#" class="nav-link"> <i class=" fa fa-circle text-success"></i> Jhone Doe <p>I do not think</p></a> </li>
            <li class="nav-item"> <a href="#" class="nav-link"> <i class=" fa fa-circle text-danger"></i> Sumon <p>Busy with coding</p></a> </li>
            <li class="nav-item"> <a href="#" class="nav-link"> <i class=" fa fa-circle text-muted "></i> Anjelina Joli <p>I out of control</p></a>
            <li class="nav-item"> <a href="#" class="nav-link"> <i class=" fa fa-circle text-muted "></i> Jonathan Smith <p>I am not here</p></a>
            <li class="nav-item"> <a href="#" class="nav-link"> <i class=" fa fa-circle text-muted "></i> Tawseef <p>I do not think</p></a>
            </li>
        </ul>

        <div class="inbox-body text-center">
            <div class="btn-group">
                <a href="javascript:;" class="btn mini btn-primary">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
            <div class="btn-group">
                <a href="javascript:;" class="btn mini btn-success">
                    <i class="fa fa-phone"></i>
                </a>
            </div>
            <div class="btn-group">
                <a href="javascript:;" class="btn mini btn-info">
                    <i class="fa fa-cog"></i>
                </a>
            </div>
        </div>

    </aside>
    <aside class="lg-side">
        <div class="inbox-head">
            <h3>Inbox</h3>
            <form class="float-right position" action="#">
                <div class="input-append">
                    <input type="text" placeholder="Search Mail" class="sr-input">
                    <button type="button" class="btn sr-btn"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
        <div class="inbox-body">
            <div class="mail-option">
                <div class="chk-all">
                    <input type="checkbox" class="mail-checkbox mail-group-checkbox">
                    <div class="btn-group">
                        <a class="btn mini all" href="#" data-toggle="dropdown">
                            All
                            <i class="fa fa-angle-down "></i>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"> None</a>
                            <a class="dropdown-item" href="#"> Read</a>
                            <a class="dropdown-item" href="#"> Unread</a>
                        </div>
                    </div>
                </div>

                <div class="btn-group">
                    <a class="btn mini tooltips" href="#" data-toggle="dropdown" data-placement="top" data-original-title="Refresh">
                        <i class=" fa fa-refresh"></i>
                    </a>
                </div>
                <div class="btn-group hidden-phone">
                    <a class="btn mini blue" href="#" data-toggle="dropdown">
                        More
                        <i class="fa fa-angle-down "></i>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Mark as Read</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-ban"></i> Spam</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-trash-o"></i> Delete</a>
                    </div>
                </div>
                <div class="btn-group">
                    <a class="btn mini blue" href="#" data-toggle="dropdown">
                        Move to
                        <i class="fa fa-angle-down "></i>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Mark as Read</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-ban"></i> Spam</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-trash-o"></i> Delete</a>
                    </div>
                </div>

                <ul class="unstyled inbox-pagination">
                    <li><span>1-50 of 234</span></li>
                    <li>
                        <a href="#" class="np-btn"><i class="fa fa-angle-left  pagination-left"></i></a>
                    </li>
                    <li>
                        <a href="#" class="np-btn"><i class="fa fa-angle-right pagination-right"></i></a>
                    </li>
                </ul>
            </div>
            <table class="table table-inbox table-hover">
                <tbody>
                    <tr class="unread">
                        <td class="inbox-small-cells">
                            <input type="checkbox" class="mail-checkbox">
                        </td>
                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                        <td class="view-message  dont-show">Vector Lab</td>
                        <td class="view-message ">Lorem ipsum dolor imit set.</td>
                        <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                        <td class="view-message  text-right">9:27 AM</td>
                    </tr>
                    <tr class="unread">
                        <td class="inbox-small-cells">
                            <input type="checkbox" class="mail-checkbox">
                        </td>
                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                        <td class="view-message dont-show">Mosaddek Hossain</td>
                        <td class="view-message">Hi Bro, How are you?</td>
                        <td class="view-message inbox-small-cells"></td>
                        <td class="view-message text-right">March 15</td>
                    </tr>
                    <tr class="">
                        <td class="inbox-small-cells">
                            <input type="checkbox" class="mail-checkbox">
                        </td>
                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                        <td class="view-message dont-show">Dulal khan</td>
                        <td class="view-message">Lorem ipsum dolor sit amet</td>
                        <td class="view-message inbox-small-cells"></td>
                        <td class="view-message text-right">June 15</td>
                    </tr>
                    <tr class="">
                        <td class="inbox-small-cells">
                            <input type="checkbox" class="mail-checkbox">
                        </td>
                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                        <td class="view-message dont-show">Facebook</td>
                        <td class="view-message">Dolor sit amet, consectetuer adipiscing</td>
                        <td class="view-message inbox-small-cells"></td>
                        <td class="view-message text-right">April 01</td>
                    </tr>
                    <tr class="">
                        <td class="inbox-small-cells">
                            <input type="checkbox" class="mail-checkbox">
                        </td>
                        <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                        <td class="view-message dont-show">Mosaddek <span class="badge badge-danger float-right">urgent</span></td>
                        <td class="view-message">Lorem ipsum dolor sit amet</td>
                        <td class="view-message inbox-small-cells"></td>
                        <td class="view-message text-right">May 23</td>
                    </tr>
                    <tr class="">
                        <td class="inbox-small-cells">
                            <input type="checkbox" class="mail-checkbox">
                        </td>
                        <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                        <td class="view-message dont-show">Facebook</td>
                        <td class="view-message">Dolor sit amet, consectetuer adipiscing</td>
                        <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                        <td class="view-message text-right">March 14</td>
                    </tr>
                    <tr class="">
                        <td class="inbox-small-cells">
                            <input type="checkbox" class="mail-checkbox">
                        </td>
                        <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                        <td class="view-message dont-show">Rafiq</td>
                        <td class="view-message">Lorem ipsum dolor sit amet</td>
                        <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                        <td class="view-message text-right">January 19</td>
                    </tr>
                    <tr class="">
                        <td class="inbox-small-cells">
                            <input type="checkbox" class="mail-checkbox">
                        </td>
                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                        <td class="view-message dont-show">Facebook <span class="badge badge-success float-right">megazine</span></td>
                        <td class="view-message view-message">Dolor sit amet, consectetuer adipiscing</td>
                        <td class="view-message inbox-small-cells"></td>
                        <td class="view-message text-right">March 04</td>
                    </tr>
                    <tr class="">
                        <td class="inbox-small-cells">
                            <input type="checkbox" class="mail-checkbox">
                        </td>
                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                        <td class="view-message dont-show">Mosaddek</td>
                        <td class="view-message view-message">Lorem ipsum dolor sit amet</td>
                        <td class="view-message inbox-small-cells"></td>
                        <td class="view-message text-right">June 13</td>
                    </tr>
                    <tr class="">
                        <td class="inbox-small-cells">
                            <input type="checkbox" class="mail-checkbox">
                        </td>
                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                        <td class="view-message dont-show">Facebook <span class="badge badge-info float-right">family</span></td>
                        <td class="view-message view-message">Dolor sit amet, consectetuer adipiscing</td>
                        <td class="view-message inbox-small-cells"></td>
                        <td class="view-message text-right">March 24</td>
                    </tr>
                    <tr class="">
                        <td class="inbox-small-cells">
                            <input type="checkbox" class="mail-checkbox">
                        </td>
                        <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                        <td class="view-message dont-show">Mosaddek</td>
                        <td class="view-message">Lorem ipsum dolor sit amet</td>
                        <td class="view-message inbox-small-cells"></td>
                        <td class="view-message text-right">March 09</td>
                    </tr>
                    <tr class="">
                        <td class="inbox-small-cells">
                            <input type="checkbox" class="mail-checkbox">
                        </td>
                        <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                        <td class="dont-show">Facebook</td>
                        <td class="view-message">Dolor sit amet, consectetuer adipiscing</td>
                        <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                        <td class="view-message text-right">May 14</td>
                    </tr>
                    <tr class="">
                        <td class="inbox-small-cells">
                            <input type="checkbox" class="mail-checkbox">
                        </td>
                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                        <td class="view-message dont-show">Sumon</td>
                        <td class="view-message">Lorem ipsum dolor sit amet</td>
                        <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                        <td class="view-message text-right">February 25</td>
                    </tr>
                    <tr class="">
                        <td class="inbox-small-cells">
                            <input type="checkbox" class="mail-checkbox">
                        </td>
                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                        <td class="dont-show">Facebook</td>
                        <td class="view-message view-message">Dolor sit amet, consectetuer adipiscing</td>
                        <td class="view-message inbox-small-cells"></td>
                        <td class="view-message text-right">March 14</td>
                    </tr>
                    <tr class="">
                        <td class="inbox-small-cells">
                            <input type="checkbox" class="mail-checkbox">
                        </td>
                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                        <td class="view-message dont-show">Dulal</td>
                        <td class="view-message">Lorem ipsum dolor sit amet</td>
                        <td class="view-message inbox-small-cells"></td>
                        <td class="view-message text-right">April 07</td>
                    </tr>
                    <tr class="">
                        <td class="inbox-small-cells">
                            <input type="checkbox" class="mail-checkbox">
                        </td>
                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                        <td class="view-message dont-show">Twitter</td>
                        <td class="view-message">Dolor sit amet, consectetuer adipiscing</td>
                        <td class="view-message inbox-small-cells"></td>
                        <td class="view-message text-right">July 14</td>
                    </tr>
                    <tr class="">
                        <td class="inbox-small-cells">
                            <input type="checkbox" class="mail-checkbox">
                        </td>
                        <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                        <td class="view-message dont-show">Sumon</td>
                        <td class="view-message">Lorem ipsum dolor sit amet</td>
                        <td class="view-message inbox-small-cells"></td>
                        <td class="view-message text-right">August 10</td>
                    </tr>
                    <tr class="">
                        <td class="inbox-small-cells">
                            <input type="checkbox" class="mail-checkbox">
                        </td>
                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                        <td class="view-message dont-show">Facebook</td>
                        <td class="view-message view-message">Dolor sit amet, consectetuer adipiscing</td>
                        <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                        <td class="view-message text-right">April 14</td>
                    </tr>
                    <tr class="">
                        <td class="inbox-small-cells">
                            <input type="checkbox" class="mail-checkbox">
                        </td>
                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                        <td class="view-message dont-show">Mosaddek</td>
                        <td class="view-message">Lorem ipsum dolor sit amet</td>
                        <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                        <td class="view-message text-right">June 16</td>
                    </tr>
                    <tr class="">
                        <td class="inbox-small-cells">
                            <input type="checkbox" class="mail-checkbox">
                        </td>
                        <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                        <td class="view-message dont-show">Sumon</td>
                        <td class="view-message">Lorem ipsum dolor sit amet</td>
                        <td class="view-message inbox-small-cells"></td>
                        <td class="view-message text-right">August 10</td>
                    </tr>
                    <tr class="">
                        <td class="inbox-small-cells">
                            <input type="checkbox" class="mail-checkbox">
                        </td>
                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                        <td class="view-message dont-show">Facebook</td>
                        <td class="view-message view-message">Dolor sit amet, consectetuer adipiscing</td>
                        <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                        <td class="view-message text-right">April 14</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </aside>
</div>
@endsection
