<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $OJSID = $_ENV['OJS_ID'];
        $client = \Config\Services::curlrequest();
        $Journals = new \App\Models\Journals();


        $response = $client->request('GET', 'https://journal.elicitpublisher.com/index.php/index/api/v1/contexts', [
            'headers' => [
                'Authorization' => 'Bearer ' . $OJSID,
            ]
        ]);
        // dd($response->getBody());
        $data = [ 'journals' => json_decode($response->getBody())->items, 'jID' => $Journals->findAll()];
        // dd($data);
        echo view('header');
        echo view('home', $data);
        echo view('footer');
    }
    
    public function csoon()
    {
        echo view('csoon');
    }

    public function indexx()
    {
        $BLOGID = $_ENV['BLOGGER_ID'];
        $client = \Config\Services::curlrequest();

        $response = $client->request('GET', 'https://www.googleapis.com/blogger/v3/blogs/'.$BLOGID.'/posts?key='.$_ENV['BLOGGER']);

        $data = [ 'blogs' => json_decode($response->getBody())->items];
        // $data = [ 'blogs' => []];
        $jsonld = '';
        echo view('main/mHeader', ['title'=>"About Klients Aspire LTD", 'desc'=>"Learn more about us", 'jsonld'=>$jsonld]);
        echo view('main/home', $data);
        echo view('main/mFooter');
    }


    public function blog()
    {
        $BLOGID = $_ENV['BLOGGER_ID'];
        $client = \Config\Services::curlrequest();

        $response = $client->request('GET', 'https://www.googleapis.com/blogger/v3/blogs/'.$BLOGID.'/posts?key='.$_ENV['BLOGGER']);

        $data = [ 'blogs' => json_decode($response->getBody())->items];
        $jsonld = '';

        // dd($data);
        echo view('main/mHeader', ['title'=>"About Klients Aspire LTD", 'desc'=>"Learn more about us", 'jsonld'=>$jsonld]);
        echo view('main/blog', $data);
        echo view('main/mFooter');
    }

    public function gallery()
    {
        dd($this->googlePhotos());    
    }

    public function tests()
    {
        // $Variable = new \App\Models\Variable();

        // $res = $this->trials();
        // $NEWetag = json_decode($res)->etag;
        // $OLDetag = json_decode($Variable->where('id','1')->find()[0]['value'])->etag;
        // if($NEWetag == $OLDetag){
        //     echo "No Need to UPDATE";
        // }else{
        //     echo "Please UPDATE me";
        //     $Variable->update(1, ['key'=>'pages', 'value'=>$res]);
        // }
        // $db = db_connect();
        // $db->query('CREATE TABLE variable (id INTEGER PRIMARY KEY, key TEXT, value TEXT)');
        // $Variable->insert(['id'=>1,'key'=>'pages', 'value'=>$res]);
        // $Variable->delete('2');
        // dd($Variable->findAll());

        // To cache and Trigger, create a google APP script to call a webhook after etag has changed
    }


    public function journal($id)
    {
        $OJSID = $_ENV['OJS_ID'];
        $client = \Config\Services::curlrequest();

        $response = $client->request('GET', 'https://journal.elicitpublisher.com/index.php/index/api/v1/contexts/'.$id, [
            'headers' => [
                'Authorization' => 'Bearer ' . $OJSID,
            ]
        ]);
        // dd($response->getBody());
        $data = [ 'journal' => json_decode($response->getBody())];
        echo view('header');
        echo view('journal', $data);
        echo view('footer');
    }

    private function OJSPage($id) {
        $NavMenu = new \App\Models\NavMenu();
		$page = $NavMenu->where('navigation_menu_item_id',$id)->find();
        #setting_value for real HTML
        #setting_name for value like content, title, etc.
        return $page;
    }

    public function pages($pg='')
    {
        switch ($pg) {
            case 'plagiarism-policies':
                $jsonld = '
                {
                    "@context": "https://schema.org",
                    "@type": "WebPage",
                    "name": "Plagiarism Policies | Elicit Publishing House",
                    "description": "Learn more about our journal plagiarism policies.",
                    "url": "' . base_url('plagiarism-policies') . '",
                    "publisher": {
                        "@type": "Organization",
                        "name": "Elicit Publishing House",
                        "logo": {
                            "@type": "ImageObject",
                            "url": "' . base_url('ui/images/site-logo.png') . '"
                        }
                    }
                }';
                echo view('header', ['title' => "Plagiarism policies | Elicit Publishing House", 'desc' => "Learn more about our journal plagiarism policies", 'jsonld' => $jsonld]);
                echo view('impLinks', ['pg' => $this->OJSPage('59')]);
                echo view('footer');
                break;
        
            case 'publication-ethics':
                $jsonld = '
                {
                    "@context": "https://schema.org",
                    "@type": "WebPage",
                    "name": "Publication Ethics | Elicit Publishing House",
                    "description": "Learn more about our journal publication ethics.",
                    "url": "' . base_url('publication-ethics') . '",
                    "publisher": {
                        "@type": "Organization",
                        "name": "Elicit Publishing House",
                        "logo": {
                            "@type": "ImageObject",
                            "url": "' . base_url('ui/images/site-logo.png') . '"
                        }
                    }
                }';
                echo view('header', ['title' => "Publication Ethics | Elicit Publishing House", 'desc' => "Learn more about our journal Publication Ethics", 'jsonld' => $jsonld]);
                echo view('impLinks', ['pg' => $this->OJSPage('60')]);
                echo view('footer');
                break;
        
            case 'editors-responsibilities':
                $jsonld = '
                {
                    "@context": "https://schema.org",
                    "@type": "WebPage",
                    "name": "Editors\' Responsibilities | Elicit Publishing House",
                    "description": "Learn more about the responsibilities of editors.",
                    "url": "' . base_url('editors-responsibilities') . '",
                    "publisher": {
                        "@type": "Organization",
                        "name": "Elicit Publishing House",
                        "logo": {
                            "@type": "ImageObject",
                            "url": "' . base_url('ui/images/site-logo.png') . '"
                        }
                    }
                }';
                echo view('header', ['title' => "Editors' Responsibilities | Elicit Publishing House", 'desc' => "Learn more about the responsibilities of editors", 'jsonld' => $jsonld]);
                echo view('impLinks', ['pg' => $this->OJSPage('61')]);
                echo view('footer');
                break;
        
            case 'authors-duties':
                $jsonld = '
                {
                    "@context": "https://schema.org",
                    "@type": "WebPage",
                    "name": "Authors\' Duties | Elicit Publishing House",
                    "description": "Learn more about the duties of authors.",
                    "url": "' . base_url('authors-duties') . '",
                    "publisher": {
                        "@type": "Organization",
                        "name": "Elicit Publishing House",
                        "logo": {
                            "@type": "ImageObject",
                            "url": "' . base_url('ui/images/site-logo.png') . '"
                        }
                    }
                }';
                echo view('header', ['title' => "Authors' Duties | Elicit Publishing House", 'desc' => "Learn more about the duties of authors", 'jsonld' => $jsonld]);
                echo view('impLinks', ['pg' => $this->OJSPage('62')]);
                echo view('footer');
                break;
        
            case 'reviewers-duties':
                $jsonld = '
                {
                    "@context": "https://schema.org",
                    "@type": "WebPage",
                    "name": "Reviewers\' Duties | Elicit Publishing House",
                    "description": "Learn more about the duties of reviewers.",
                    "url": "' . base_url('reviewers-duties') . '",
                    "publisher": {
                        "@type": "Organization",
                        "name": "Elicit Publishing House",
                        "logo": {
                            "@type": "ImageObject",
                            "url": "' . base_url('ui/images/site-logo.png') . '"
                        }
                    }
                }';
                echo view('header', ['title' => "Reviewers' Duties | Elicit Publishing House", 'desc' => "Learn more about the duties of reviewers", 'jsonld' => $jsonld]);
                echo view('impLinks', ['pg' => $this->OJSPage('63')]);
                echo view('footer');
                break;
        
            case 'instructions-for-authors':
                $jsonld = '
                {
                    "@context": "https://schema.org",
                    "@type": "WebPage",
                    "name": "Instructions for Authors | Elicit Publishing House",
                    "description": "Learn more about the instructions for authors.",
                    "url": "' . base_url('instructions-for-authors') . '",
                    "publisher": {
                        "@type": "Organization",
                        "name": "Elicit Publishing House",
                        "logo": {
                            "@type": "ImageObject",
                            "url": "' . base_url('ui/images/site-logo.png') . '"
                        }
                    }
                }';
                echo view('header', ['title' => "Instructions for Authors | Elicit Publishing House", 'desc' => "Learn more about the instructions for authors", 'jsonld' => $jsonld]);
                echo view('impLinks', ['pg' => $this->OJSPage('64')]);
                echo view('footer');
                break;
        
            case 'article-policies':
                $jsonld = '
                {
                    "@context": "https://schema.org",
                    "@type": "WebPage",
                    "name": "Article Policies | Elicit Publishing House",
                    "description": "Learn more about our article policies.",
                    "url": "' . base_url('article-policies') . '",
                    "publisher": {
                        "@type": "Organization",
                        "name": "Elicit Publishing House",
                        "logo": {
                            "@type": "ImageObject",
                            "url": "' . base_url('ui/images/site-logo.png') . '"
                        }
                    }
                }';
                echo view('header', ['title' => "Article Policies | Elicit Publishing House", 'desc' => "Learn more about our article policies", 'jsonld' => $jsonld]);
                echo view('impLinks', ['pg' => $this->OJSPage('65')]);
                echo view('footer');
                break;
        
            case 'editing-services':
                $jsonld = '
                {
                    "@context": "https://schema.org",
                    "@type": "WebPage",
                    "name": "Editing Services | Elicit Publishing House",
                    "description": "Learn more about our editing services.",
                    "url": "' . base_url('editing-services') . '",
                    "publisher": {
                        "@type": "Organization",
                        "name": "Elicit Publishing House",
                        "logo": {
                            "@type": "ImageObject",
                            "url": "' . base_url('ui/images/site-logo.png') . '"
                        }
                    }
                }';
                echo view('header', ['title' => "Editing Services | Elicit Publishing House", 'desc' => "Learn more about our editing services", 'jsonld' => $jsonld]);
                echo view('impLinks', ['pg' => $this->OJSPage('66')]);
                echo view('footer');
                break;
        
            case 'peer-review-policy':
                $jsonld = '
                {
                    "@context": "https://schema.org",
                    "@type": "WebPage",
                    "name": "Peer Review Policy | Elicit Publishing House",
                    "description": "Learn more about our peer review policy.",
                    "url": "' . base_url('peer-review-policy') . '",
                    "publisher": {
                        "@type": "Organization",
                        "name": "Elicit Publishing House",
                        "logo": {
                            "@type": "ImageObject",
                            "url": "' . base_url('ui/images/site-logo.png') . '"
                        }
                    }
                }';
                echo view('header', ['title' => "Peer Review Policy | Elicit Publishing House", 'desc' => "Learn more about our peer review policy", 'jsonld' => $jsonld]);
                echo view('impLinks', ['pg' => $this->OJSPage('67')]);
                echo view('footer');
                break;
        
            default:
                echo "404 Not found";
                break;
        }
    }

    private function googlePhotos($token='Puqwxek1sBVpmvud9')
    {
        $client = \Config\Services::curlrequest();
        $response = $client->request('GET', 'https://galleria.sgm.ng/'.$token);

        $res =  json_decode($response->getBody());
        $ret = [];

        foreach ($res as $key => $gal) {
            if($key == 0){
            }else{
                // $ret[$key] = $gal;
                array_push($ret, $gal);
            }
        }

        return $ret;
    }


    public function singleBlog($y,$m,$t)
    {
        $path = $y.'/'.$m.'/'.$t;
        $url = 'https://www.googleapis.com/blogger/v3/blogs/'.$_ENV['BLOGGER_ID'].'/posts/bypath?path=/'.$path.'&key='.$_ENV['BLOGGER'];
        $res = $this->loadContent($url);
        $re = '/<img[^>]+src=[\'"]([^\'"]+)[\'"][^>]*>/i';preg_match($re, $res->content, $matches, PREG_OFFSET_CAPTURE, 0); $extractedIMG = $matches[1][0];
        $cleanText = preg_replace('/<(?:[^"\'>]|".*?"|\'.*?\')*>|<\/?[a-zA-Z]+\b[^>]*>|[\r\n\t]+/s', '', $res->content);
        $jsonld = '
            "@context": "https://schema.org",
            "@type": "BlogPosting",
            "headline": "'.$res->title.'",
            "image": "'.$extractedIMG.'",
            "datePublished": "'.$res->published.'",
            "dateModified": "'.$res->updated.'",
            "author": {
                "@type": "Person",
                "name": "Klients Aspire LTD"
            },
            "publisher": {
                "@type": "Organization",
                "name": "Klients Aspire LTD",
                "logo": {
                    "@type": "ImageObject",
                    "url": "https://phfogun.org.ng/assets/img/phf_logo.png"
                }
            },
            "description": "'.substr($cleanText, 0, 300).'",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "'.base_url('blog/'.$path).'"
            }';
        $data = [
            'id' => $res->id,
            'published' => explode('T', $res->published)[0] ,
            'labels' => $res->labels[0],
            'title' => $res->title,
            'content' => $res->content,
            'url' => base_url('blog/'.$path),
        ];
        echo view('main/mHeader', ['title'=>$data['title']."|| Klients Aspire LTD", 'desc'=>"Read and learn more as it is an obligation from cradle to grave", 'jsonld'=>$jsonld]);
        echo view('main/pages', $data);
        echo view('main/mFooter');
    }

    private function loadPage($pageID)
    {
        $url = 'https://www.googleapis.com/blogger/v3/blogs/'.$_ENV['BLOGGER_ID'].'/pages/'.$pageID.'?key='.$_ENV['BLOGGER'];
        $res = $this->loadContent($url);
        return ['title'=>$res->title, 'content'=>$res->content];
    }

    private function loadPostASPage($path)
    {
        $url = 'https://www.googleapis.com/blogger/v3/blogs/'.$_ENV['BLOGGER_ID'].'/posts/bypath?path=/'.$path.'&key='.$_ENV['BLOGGER'];
        $res = $this->loadContent($url);
        return ['title'=>$res->title, 'content'=>$res->content];
    }

    private function loadContent($url)
    {
        $client = \Config\Services::curlrequest();
        $response = $client->request('GET', $url);
        // dd($response->getBody());
        return json_decode($response->getBody());
    }

    private function trials()
    {
        $client = \Config\Services::curlrequest();
        $response = $client->request('GET', 'https://www.googleapis.com/blogger/v3/blogs/'.$_ENV['BLOGGER_ID'].'/pages/'.'?key='.$_ENV['BLOGGER']);
        return $response->getBody();
    }
}
