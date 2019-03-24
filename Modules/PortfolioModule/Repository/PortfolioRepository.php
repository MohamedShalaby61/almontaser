<?php

namespace Modules\PortfolioModule\Repository;

use File;
use Modules\PortfolioModule\Entities\Portfolio\Portfolio;
use Modules\PortfolioModule\Repository\PortfolioPhotoRepository;


class PortfolioRepository
{

    private $portfolioPhotoRepo;

    /**
     * Constructor
     *
     * @param PortfolioPhotoRepository $portfolioPhotoRepo
     */
    public function __construct(PortfolioPhotoRepository $portfolioPhotoRepo)
    {
        $this->portfolioPhotoRepo = $portfolioPhotoRepo;
    }

    /**
     * Return number of Projects.
     *
     * @return  [type]  [return description]
     */
    public function NumOfProjects()
    {
        return Portfolio::all()->count();
    }

    public function find($id)
    {
        $project = Portfolio::where('id', $id)->first();

        return $project;
    }

    public function findAll()
    {
        $projects = Portfolio::with(['portfolio_category', 'portfolio_photo'])->orderBy('id','desc')->get();

        return $projects;
    }

    # Insert
    public function save($projectData, $project_photos)
    {
        $projectData = Portfolio::create($projectData);

        // Pass project_photos to save method.
        $album = $this->portfolioPhotoRepo->save($projectData, $project_photos);
    }

    public function update($id, $projectData, $portofolio_trans)
    {
        $project = Portfolio::find($id);
        $project->update($projectData);

        foreach (\LanguageHelper::getLang() as $lang) {
            if (isset($portofolio_trans[$lang->lang]['title'])) {
                $project->translate('' . $lang->lang)->title = $portofolio_trans[$lang->lang]['title'];
            }
            if (isset($portofolio_trans[$lang->lang]['description'])) {

                $project->translate('' . $lang->lang)->description = $portofolio_trans[$lang->lang]['description'];
            }
            if (isset($portofolio_trans[$lang->lang]['meta_title'])) {
                $project->translate('' . $lang->lang)->meta_title = $portofolio_trans[$lang->lang]['meta_title'];
                $project->translate('' . $lang->lang)->meta_desc = $portofolio_trans[$lang->lang]['meta_desc'];
                $project->translate('' . $lang->lang)->meta_desc = $portofolio_trans[$lang->lang]['meta_keywords'];
                $project->translate('' . $lang->lang)->meta_desc = $portofolio_trans[$lang->lang]['slug'];
            }
            $project->save();
        }
        return $project;
    }

    public function delete($project)
    {
        if ($project->photo) {
            $file_path = public_path() . '/images/project/' . $project->photo;
            $thumbnail_path = public_path() . '/images/project/thumb/' . $project->photo;

            File::delete([$file_path, $thumbnail_path]);
        }

        Portfolio::destroy($project->id);
    }
}
