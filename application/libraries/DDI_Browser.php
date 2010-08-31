<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * DDI Browser Class
 * 
 * Provides methods to access every single bit of information from DDI 
 * including overview, access-policy, data-files, etc
 *
 * Uses the XML READER class for memory efficient parsing of the DDI Files.
 *
 * For backward compatibility, DOM based method is provided which can be
 * very slow for larger DDI files with more than 1000 variables. To use the 
 * DOM based method, simply set the use_xml_reader=FALSE.
 *
 * Usage:
 * 
 * $obj->ddi_file='path-to-ddi-file.xml';//set the file
 * $obj->get_overview(); //returns overview html
 *
 *
 * @package		NADA 2.1
 * @subpackage	Libraries
 * @category	DDI Browser
 * @author		Mehmood
 * @link		-
 *
 */
class DDI_Browser{
    
	var $ddi_file;
	var $use_xml_reader=TRUE;
	
	
    //constructor
	function DDI_Browser()
	{
		$this->ci =& get_instance();
		$this->ci->load->helper('xslt_helper');
    }

	function _clean_xml($str)
	{
		$str=trim(str_replace('<?xml version="1.0" encoding="UTF-8"?>','',$str));
		$str=trim(str_replace('<?xml version="1.0" encoding="UTF-8" standalone="yes"?>','',$str));
		return $str;
	}

	//returns the overview of the ddi file
	function get_overview_html($ddi_file,$parameters=NULL)
	{				
		$xslt=FCPATH.'xslt/ddi_overview.xslt';
		$output=xsl_transform($ddi_file,$xslt,$parameters, $format="xml");

		//cleanup the output for whitespaces,xml header
		$output=$this->_clean_xml($output);
		//$output=str_replace("\n",' ',$output);
		
		return $output;
	}

	//returns the overview of the ddi file
	function get_access_policy_html($ddi_file,$parameters=NULL)
	{				
		$xslt=FCPATH.'xslt/ddi_accesspolicy.xslt';
		$output=xsl_transform($ddi_file,$xslt,$parameters, $format="xml");
		$output=$this->_clean_xml($output);
		return $output;
	}

	function get_sampling_html($ddi_file,$parameters=NULL)
	{				
		$xslt=FCPATH.'xslt/ddi_sampling.xslt';
		$output=xsl_transform($ddi_file,$xslt,$parameters, $format="xml");
		$output=$this->_clean_xml($output);
		return $output;
	}

	function get_questionnaires_html($ddi_file,$parameters=NULL)
	{				
		$xslt=FCPATH.'xslt/ddi_questionnaires.xslt';
		$output=xsl_transform($ddi_file,$xslt,$parameters, $format="xml");
		$output=$this->_clean_xml($output);
		return $output;
	}

	function get_dataprocessing_html($ddi_file,$parameters=NULL)
	{				
		$xslt=FCPATH.'xslt/ddi_dataprocessing.xslt';
		$output=xsl_transform($ddi_file,$xslt,$parameters, $format="xml");
		$output=$this->_clean_xml($output);
		return $output;
	}
	function get_datacollection_html($ddi_file,$parameters=NULL)
	{				
		$xslt=FCPATH.'xslt/ddi_datacollection.xslt';
		$output=xsl_transform($ddi_file,$xslt,$parameters, $format="xml");
		$output=$this->_clean_xml($output);
		return $output;
	}

	function get_dataappraisal_html($ddi_file,$parameters=NULL)
	{				
		$xslt=FCPATH.'xslt/ddi_dataappraisal.xslt';
		$output=xsl_transform($ddi_file,$xslt,$parameters, $format="xml");
		$output=$this->_clean_xml($output);
		return $output;
	}

	function get_technicaldocuments_html($ddi_file,$parameters=NULL)
	{				
		$xslt=FCPATH.'xslt/ddi_technicaldocuments.xslt';
		$output=xsl_transform($ddi_file,$xslt,$parameters, $format="xml");
		$output=$this->_clean_xml($output);
		return $output;
	}

	function get_datafile_html($ddi_file,$file_id,$parameters=array())
	{	
		$parameters=array_merge($parameters,
					array(
						'file'=>$file_id,
						'browser_url'=>site_url().'/'.$this->ci->uri->segment(1). '/'.$this->ci->uri->segment(2)
						) 
				);
		$xslt=FCPATH.'xslt/ddi_datafile.xslt';
		$output=xsl_transform($ddi_file,$xslt,$parameters, $format="xml");
		$output=$this->_clean_xml($output);
		return $output;
	}

	function get_variables_by_group($ddi_file,$group_id,$parameters=array())
	{	
		$parameters=array_merge($parameters,
					array(
						'VarGroupID'=>$group_id,
						'browser_url'=>site_url().'/'.$this->ci->uri->segment(1). '/'.$this->ci->uri->segment(2)
						) 
				);
		$xslt=FCPATH.'xslt/ddi_vargrp_variables.xslt';
		$output=xsl_transform($ddi_file,$xslt,$parameters, $format="xml");
		$output=$this->_clean_xml($output);
		return $output;
	}

	function get_variable_html($ddi_file,$variable_id,$parameters=array())
	{	
		$parameters=array_merge($parameters,array('search_varID'=>$variable_id) );
		$xslt=FCPATH.'xslt/ddi_variable.xslt';
		$output=xsl_transform($ddi_file,$xslt,$parameters, $format="xml");
		$output=$this->_clean_xml($output);
		return $output;
	}

	/**
	*
	* Get an array of data files
	*
	*/
	function get_datafiles_array($ddi_file,$parameters=array())
	{	
		$xslt=FCPATH.'xslt/ddi_datafiles.xslt';
		$output=xsl_transform($ddi_file,$xslt,$parameters, $format="xml");
		$output=$this->_clean_xml($output);

		$items=array();
		$rows=explode('{BR}',$output);
		
		//create an array of items
		for($i=0;$i<count($rows)-1;$i++)
		{
			$values=explode('{TAB}',$rows[$i]);
			$items[$values[0]]=$values[1];
		}
		return $items;
	}


	/**
	* Get an array of all Variable Groups from the DDI file
	* returns a formatted UL list 
	*
	*/
	function get_variable_groups_array($ddi_file,$parameters=array())
	{	
		$xslt=FCPATH.'xslt/ddi_vargroups.xslt';
		$output=xsl_transform($ddi_file,$xslt,$parameters, $format="xml");
		$output=$this->_clean_xml($output);
		$str=$output;
		$line_="{line}";
		$col_="{colum}";
		$arr=explode($line_,$str);
		
		$vgroups=null;
		
		//iterate lines
		foreach($arr as $l)
		{
			$cols=explode($col_,$l);			
			$id=trim($cols[0]);
						
			//fill array
			if ($id!='')
			{
				$vgroups[$id]['vargrp']=trim($cols[1]);
				$vgroups[$id]['labl']=trim($cols[2]);	
			}
		}		
		
		
		if ($vgroups==NULL)
		{
			return NULL;
		}
		
		$excluded=array(null);
		$result= '<ul>';

		foreach($vgroups as $g=>$value)
		{
			if (in_array($g,$excluded)){break;}
				$result.= '<li><a class="ajax" href="'.site_url().'/ddibrowser/'.$this->ci->uri->segment(2).'/vargrp/'.$g.'">'. $value['labl']. '</a></span>' ;
				if ($value['vargrp']!=''){
					
//					var_dump($value['vargrp']);exit;
					//echo $value['vargrp'];
					$vargrps=explode(" ", $value['vargrp']);
					
					$result.= '<ul>';
					foreach ($vargrps as $vargrp)
					{
						//$result.= '<li><span><a href="?section=vargrp&vgid='.$vargrp.'" onclick=\'showSection("vargrp&vgid='.$vargrp.'");return false;\')>'. $vgroups[$vargrp]['labl']. '</a></span>' ;
						$result.= '<li><a class="ajax" href="'.site_url().'/ddibrowser/'.$this->ci->uri->segment(2).'/vargrp/'.$vargrp.'">'. $vgroups[$vargrp]['labl']. '</a></span>' ;
						//add to exclusion list, so it wont be listed again
						$excluded[]=$vargrp;
					}
					$result.= '</ul>';
				}
				$result.= '</li>';
		}	
		$result.= '</ul>';
		
		return $result;
	}

	/**
	* Returns the available sections of the DDI for the LEFT-SIDEBAR
	*
	*/
	function get_sidebar_options($ddi_file)
	{	
		$xml=$this->get_study_part($ddi_file);
			
		//transform the xml to string
		$xslt=FCPATH.'xslt/ddi_sidebar.xslt';
		$output=xsl_transform($xml,$xslt,$parameters=NULL, $format="xml");
		
		return $output;
	}
	
	function get_resources_by_type($surveyid,$dctype)
	{
		$this->ci->db->select('*');
		$this->ci->db->where('survey_id',$surveyid);
		
		if ($dctype=='other')
		{
			//other materials
			$this->ci->db->not_like('dctype','[doc/tec]');
			$this->ci->db->not_like('dctype','[doc/rep]');
			$this->ci->db->not_like('dctype','[doc/qst]');
			$this->ci->db->not_like('dctype','[dat]');
			$this->ci->db->not_like('dctype','[dat/micro]');
		}
		else
		{
			$this->ci->db->like('dctype',$dctype);
		}	
		return $this->ci->db->get('resources')->result_array();
	}	
	
	/**
	* Returns the available sections for the resources (reports, other materials, stats tables, tech documents,questionnaires)
	*
	*/
	function get_available_resources($surveyid)
	{
		$this->ci->db->select('dctype');
		$this->ci->db->where('survey_id',$surveyid);		
		$this->ci->db->group_by('dctype');
		$result=$this->ci->db->get('resources')->result_array();
		if ($result)
		{
			$output=array();
			foreach($result as $row)
			{
				$dctype=$row['dctype'];
				
				if (strpos($dctype,'[doc/tec]') ) 
				{
					$output[]='technical';
				}
				else if (strpos($dctype,'[doc/qst]') ) 
				{
					$output[]='questionnaires';
				}
				else if (strpos($dctype,'[doc/rep]') ) 
				{
					$output[]='reports';
				}
				else if (strpos($dctype,'[tbl]') ) 
				{
					$output[]='tables';
				}
				else
				{
					$output[]='othermaterials';
				}				
			}
			return $output;
		}
		//return empty array
		return array();
	}
	
	/**
	* Returns the study/doc xml 
	*
	*/
	function get_study_part($ddi_file)
	{
			//initialize the reader	
		$reader = new XMLReader();

		//read the xml file
	    if(!$reader->open($ddi_file))
		{ 
			print "can't open file";
			return false;
		}
		
		$output=array();
		
		//read only the DDI docDscr and stdyDscr sections 
		while ($reader->read() ) 
		{
			if ($reader->nodeType == XMLReader::ELEMENT && $reader->name == "codeBook") 
			{
				//read the codeBook attributes		
				$output['ID']= $reader->getAttribute ('ID');
				$output['xmlns']= $reader->getAttribute ('xmlns');
				$output['version']=$reader->getAttribute ('version');				
			}
			else if ($reader->nodeType == XMLReader::ELEMENT && $reader->name == "docDscr") 
			{
				$output['docDscr']=$reader->readOuterXML();
			}
			else if ($reader->nodeType == XMLReader::ELEMENT && $reader->name == "stdyDscr") 
			{
				$output['stdyDscr']=$reader->readOuterXML();
				break;
			}
		}				
		$reader->close();
		
		//basic DDI validation
		if (!isset($output['ID']) || !isset($output['version']))
		{
			return NULL;
		}
		
		//build an xml file with the study/doc elements only
		$xml='<codeBook xmlns="http://www.icpsr.umich.edu/DDI" 
						xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" 
						ID="'.$output['ID'].'" version="'.$output['version'].'" >';
		$xml.=$output['docDscr'];
		$xml.=$output['stdyDscr'];
		$xml.='</codeBook>';
		return $xml;
	}
}
// END DDIBrowser Class

/* End of file DDI_Browser.php */
/* Location: ./application/libraries/DDI_Browser.php */