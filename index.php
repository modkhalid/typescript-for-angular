<?php
$var="sad		funny	happy	jokes	exciting				
,blessed		exciting							
,excited		good	chill	congrats	happiness				
,shaandar		(happy)							
,alone		i_will_with_u	relax	wait_for_some_best_moment					
,wonderful		(sandar)	congrats						
,amused		(happy)							
,exhausted		relax	refresheing	jokes	take_care	teke_leave			
,sorry		iits ok	everything_will_be_ok		I_am_with_you	don’t_warry	(sad)		
,happy		funny	good 	chill	jokes	happiness			
,loved		u_r_lucky	happy	good					
,crazy		what_happend	why?						
,cool		(happy)							
,fantastic		(happy)							
,proud		thaks full							
,relaxed		good	chill						
,positive		(happy)							
,awesome		(happy)							
,lovely		(loved)							
,hopeful		its good 	maintain_it 	do_something_best					
,thankful		(thaks)							
,joyful		(happy)							
,inlove		(loved)							
,emotional		control_your_self							
,festive		enjoy	happy	nice	good				
,motivated		(hopful)							
,special		(festive)	congrates	happy					
,fresh		good	jokes	happy					
,fabulose		(happy)							
,strong		good	nice 	do_something					
,angry		relax	why?						
,heartbroken		(sad)	relax	everything_will_be_ok		Wait			
,refreshed		good	enjoy	(haapy)					
,amazing		(wonderful)	happy	nice					
,funny		(crazy)	enjoy	calm down					
,thoughtful		work_on_it	nice 	mintaiin_it	do_it_better				
,upset		(sad)							
,chill		(happy)							
,good		(happy)	nice_to_hear						
,cute		(nice)							
,nonstalgic		(sad)							
,tired		relax	relax_some_time		evething_will_be_ok				
,entertained		(happy)							
,beauftiful		(awesome)	wow	nicce					
,super		(awesome)	(happy)						
,energised		nice	good 	be_healthy	do_something_better_for_you				
,nervouse		relax	why	what_happend					
,confused		relax	thing 	here_is_suggestion...					
,silly		funny_quotes	roast 	why?	is_it_necessory_to_be_silly_hahahaah				
,sick		(sad)	concern_with_specialist						
,pained		(sick)							
,hungry		lets_goto_market/shop			eats_something		lets_for_party		
,amazed		(awesome)							
,peaceful		(awesome)	(happy)						
,anziouse		(depressed)	jokes	(sad)					
,accomplished		(haapy)							
,great		(awesome)							
,determined		(hopful)	do_it_better						
,lucky		(awesome)							
,insipred		(awesome)							
,cold		??							
,worried		why?							
,sleepy		wake_up	Sleeep_nice_dream						
,bored		why?	i_will_make_you_happy_by_this_song..						
,concerned									
,fed up		(sad)	(depressed)						
,ready		(good	where are u going						
,delighted									
,confident		(confidence)	(determined)						
,optimistic		(awesome)							
,hurt		(sad)							
,down									
,ill		(sick)							
,drained									
,blah									
,lonley		(alone)							
,naughty		calm_down	what_happend		why?				
,frustrated		relax							
,stressed		relax							
,shocked		why?							
,disappointed		why?							
,annoyed									
,scared		what_happened							
,free		do_something		listen_this_song....		here_is_job_for_u			
,irritated		why?		never_mind 					
,relived		happy	good 	relax	(amazing)				
,jumped		relax							
,brokem		(heartbroken)	(sad)						
,impatient		wait	suggest_some_music...						
,lazy		do_exercise	funny	jokes					
,crappy		(sad)							
,perplexed		don’t_worry_about_it		it’s_normal_tihng					
,sore		(sad)							
,stuffed									
,sarcastic									
,hopless		(hope)	never_lost_you_hope		evething_will_ok		wait_for_your_best		it_took_some_time
,full									
,old		old is gold	don’t_worry		purchase new				
,better		(happy)							
,shattered		motivations	happy	(depresses)	funny				
,content									
,depressed		(sad)							
,awake		music 	jokes	happy	good				
,surprised		jokes	happy	music					
,disgusted		never hate	happy	jokes	impress				
,blessful		(blessed)							
,hyper		(exhausted)	calm_down	relax					
,curious		relax	happy	jokes					
,statusfied									
,lost		(sad)							
,incomplete		do_it_soon	take_it_easy	blah					
,meh									
,furious									
,drunk		don’t_drink_infuture		why?	stop_drinking	effect_of_drink			
"	;

$stripped = (preg_replace('/\s+/', ' ', $var));
$arr=explode(",",$stripped);
include '../import/connection.php';//connections file
foreach ($arr as $value) {
	$subarray=explode(" ",$value);
	$counter=0;
	$id=uniqid(rand(0,100000000000000000));
	foreach ($subarray as  $val) {
		if($counter==0){
			$sql="INSERT INTO `momentType` (`moment_id`, `momentType`, `status`, `time`) VALUES ('$id', '$val', '1', CURRENT_TIMESTAMP)";
			mysqli_query($conn,$sql);
			$counter=1;
		}else{
			$hash=uniqid(rand(0,100000000000000000));
			$sql="INSERT INTO `hash_table` (`hash_id`, `content_id`, `hash_word`, `type`, `status`, `time`) VALUES ('$hash', '$id', '#$val', '7', '1', CURRENT_TIMESTAMP)";
			mysqli_query($conn,$sql);
		}
	}
}