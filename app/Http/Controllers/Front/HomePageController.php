<?php

namespace App\Http\Controllers\Front;

use App\Models\User;
use App\Models\Course;
use App\Models\Slider;
use App\Models\OurService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\OurExpert;
use App\Models\Project;

class HomePageController extends Controller
{
    public function home()
    {
        $data['header_title'] = 'Tech-Solution';
        $data['getService'] = OurService::getAllService();
        $data['getProject'] = Project::getProject();
        $data['getCourse'] = Course::getAllCourse();
        $data['getSlider'] = Slider::getSliderForHome();
        return view('frontend.home',$data);
    }

    public function about_us_page()
    {
        $data['header_title'] = 'About Us';
        $data['getExperts'] = OurExpert::getExperts();
        return view('frontend.menu_single_page.about_us',$data);
    }

    public function services_page()
    {
        $data['header_title'] = 'Service';
        return view('frontend.menu_single_page.service',$data);
    }

    public function service_detail($name)
    {
          if($name == 'Web')
          {
            return view('');
          }
          if($name == 'Digital')
          {
            $data['header_title'] = "Digital Marketing";
            return view('frontend.menu_single_page.digital_marketing', $data);
          }
          if($name == 'Apps')
          {
            return "hello Apppssss";
          }
          if($name == 'Ecommerce')
          {
            return "hello helloo Ecommerce";
          }
          if($name == 'Online')
          {
            return "hello ONline Web";
          }
    }

    public function project()
    {
        $data['header_title'] = 'Project';
        $data['getProject'] = Project::getProject();
        return view('frontend.menu_single_page.project',$data);
    }

    public function project_detail($id)
    {
        $data['header_title'] = 'Project-Detail';
        $data['getProject'] = Project::getProject()->where('id', '!=', $id );
        $data['getProjectDetail'] = Project::getSingle($id);
        return view('frontend.project.detail',$data);
    }

    public function our_team()
    {
        $data['header_title'] = 'team';
        $data['getExperts'] = OurExpert::getExperts();
        return view('frontend.menu_single_page.team',$data);
    }

    public function team_detail($id)
    {
        $data['header_title'] = "Team Detail";
        $data['getTeamDetail'] = OurExpert::getSingle($id);
        return view('frontend.team.team-detail', $data);
    }

    public function course_detail($id)
    {
        $data['header_title'] = "Course Detail";
        $data['getCourse'] = Course::getAllCourse()->where('id','!=', $id);
        $data['getCourseDetail'] = Course::getSingle($id);
        return view('frontend.course.course-detail', $data);
    }

    public function course_detail_different_page($name)
    {
          if($name == 'Software Development')
          {
            $data['header_title'] = "Software Development";
            return view('frontend.course.softwaredevelopment', $data);
          }
          if($name == 'Web Design')
          {
            $data['header_title'] = "Web Design";
            return view('frontend.course.webdesign', $data);
          }
          if($name == 'Java')
          {
            $data['header_title'] = "java Course";
            $data['getCourse'] = Course::getAllCourse()->where('name','!=', $name);
            return view('frontend.course.java_course_detail', $data);
          }
          if($name == 'Ms-Office')
          {
            $data['header_title'] = "java Course";
            $data['getCourse'] = Course::getAllCourse()->where('name','!=', $name);
            return view('frontend.course.office_course_detail', $data);
          }
          if($name == 'Flutter-course')
          {
            $data['header_title'] = "Flutter Course";
            $data['getCourseSingle'] = Course::getSingle(5);
            $data['getCourse'] = Course::getAllCourse()->where('name','!=', $name);
            return view('frontend.course.flutter_course_detail', $data);
          }
    }

    public function our_courses()
    {
        $data['header_title'] = 'Courses';
        $data['getCourse'] = Course::getAllCourse();
        return view('frontend.menu_single_page.our_courses',$data);
    }

    public function contact_page()
    {
        $data['header_title'] = 'Contact';
        return view('frontend.menu_single_page.contact',$data);
    }
}