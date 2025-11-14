<?php

namespace App\Controllers;

use App\Models\BiodataModel;
use App\Models\EducationModel;
use App\Models\ExperienceModel;
use App\Models\ExperiencePointModel;
use App\Models\PersonalInfoModel;
use App\Models\ProjectModel;
use App\Models\ProjectPointModel;
use App\Models\ProjectSkillModel;
use App\Models\SkillModel;
use App\Models\TechModel;

class CvController extends BaseController
{
    public function index()
    {
        // Inisialisasi model
        $biodataModel         = new BiodataModel();
        $educationModel       = new EducationModel();
        $experienceModel      = new ExperienceModel();
        $experiencePointModel = new ExperiencePointModel();
        $personalInfoModel    = new PersonalInfoModel();
        $projectModel         = new ProjectModel();
        $projectPointModel    = new ProjectPointModel();
        $projectSkillModel    = new ProjectSkillModel();
        $skillModel           = new SkillModel();
        $techModel            = new TechModel();

        // --- BIODATA (ambil 1 orang, id = 1) ---
        $biodata = $biodataModel->where('id', 1)->first();

        if (! $biodata) {
            // fallback kalau biodata kosong (biar view nggak error)
            $biodata = [
                'id'         => 1,
                'nama'       => 'Your Name',
                'headline'   => 'Frontend & UI/UX Enthusiast',
                'tagline'    => 'I blend design and code to create smooth digital experiences that feel intuitive, fast, and delightful to use.',
                'foto'       => null,
                'foto_about' => null,
            ];
        }

        $biodataId = $biodata['id'];

        // --- PERSONAL INFO (Name, DOB, Location, Phone, dll.) ---
        $personalInfo = $personalInfoModel
            ->where('biodata_id', $biodataId)
            ->orderBy('id', 'ASC')
            ->findAll();

        // --- TECH STACK ICONS ---
        $tech = $techModel
            ->where('biodata_id', $biodataId)
            ->orderBy('id', 'ASC')
            ->findAll();

        // --- EDUCATION ---
        $education = $educationModel
            ->where('biodata_id', $biodataId)
            ->orderBy('tahun', 'ASC')
            ->findAll();

        // Pendidikan utama = entry terakhir (kampus sekarang)
        $educationMain = null;
        if (! empty($education)) {
            $educationMain = end($education);
            reset($education);
        }

        // --- EXPERIENCE + EXPERIENCE POINTS ---
        $experiences = $experienceModel
            ->where('biodata_id', $biodataId)
            ->orderBy('id', 'DESC')
            ->findAll();

        $experiencesWithPoints = [];
        foreach ($experiences as $exp) {
            $points = $experiencePointModel
                ->where('experience_id', $exp['id'])
                ->orderBy('id', 'ASC')
                ->findAll();

            $exp['points'] = $points;
            $experiencesWithPoints[] = $exp;
        }

        // --- SKILLS ---
        $skills = $skillModel
            ->where('biodata_id', $biodataId)
            ->orderBy('kategori', 'ASC')
            ->orderBy('persentase', 'DESC')
            ->findAll();

        // --- PROJECTS + POINTS + SKILLS ---
        $projects = $projectModel
            ->where('biodata_id', $biodataId)
            ->orderBy('id', 'DESC')
            ->findAll();

        $projectsWithDetails = [];
        foreach ($projects as $proj) {
            $points = $projectPointModel
                ->where('project_id', $proj['id'])
                ->orderBy('id', 'ASC')
                ->findAll();

            $skillsProject = $projectSkillModel
                ->where('project_id', $proj['id'])
                ->orderBy('id', 'ASC')
                ->findAll();

            $proj['points'] = $points;
            $proj['skills'] = $skillsProject;
            $projectsWithDetails[] = $proj;
        }

        $data = [
            'biodata'        => $biodata,
            'personalInfo'   => $personalInfo,
            'tech'           => $tech,
            'education'      => $education,
            'educationMain'  => $educationMain,
            'experiences'    => $experiencesWithPoints,
            'skills'         => $skills,
            'projects'       => $projectsWithDetails,
        ];

        return view('cv_view', $data);
    }
}
