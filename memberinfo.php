<?php
/*
Template Name: memberinfo.php
 */
?>

<?php get_header(); ?>

<?php get_back_header(); ?>

<div id="memberinfo">
</div>

<script type="text/javascript">

var info = [
	{
		"image": "image1",
		"name": "Ambreen Gilani",
		"content": "Ms. Gilani has lived in Pakistan, UK and the US. She has worked for approximately 10 years at the World Bank and United Nations on projects focusing on global equality through poverty reduction. She has promoted gender equality through programs such as USAID’s Let Girls Learn Initiatives in Liberia, Tanzania and Pakistan, which aimed to improve enrollment and retention of girls in school and to provide secondary school aged girls who have never been to school with basic literacy and market based vocational skills. Ambreen has also been implementing programs to improve global educational equality: she was responsible for the primary and secondary school incentive/stipend programs, which were designed as a response to the education emergency in Pakistan with over 7 million Out of School Children from the ages of 6-16. While at UNDP, Ambreen selected, supervised and provided technical assistance to research projects in the areas of food security/agriculture, urban development, social protection and education. She also led financial and economic crisis specific analytical work to mitigate the human development impact of the crisis. Moreover, Ambreen worked extensively on earthquake recovery projects in Pakistan after the earthquake of 2005 focusing on reconstruction of schools, community centers and homes. She received a Master’s degree in Development Management from the London School of Economics and Political Science.",
	},
	{
		"image": "image2",
		"name": "Yifeng Mao, CFA",
		"content": "Mr. Mao is an entrepreneur in the global Fintech space. He has founded a few Fintech companies and alternative asset management companies in Singapore, Hong Kong and China. In the past 10 years, he has developed multiple quantamental systems with big data analysis technology, optimizing the investment decision making process. He has gained recognition from prestigious global financial institutes. Mr. Mao believes EOS can better protect people’s life, liberty and property and is going to migrate those quantamental systems onto EOS to serve more people in the real world as well as the crypto world.",
	},
	{
		"image": "image3",
		"name": "Dr. Phoebe Xu",
		"content": "Dr. Xu has research experience in the US, Singapore, Hong Kong and China. She is a psychologist with rich academic experiences in social psychology, cognitive psychology and applied psychology. She has a deep understanding of both the theory and reality of equality problems among genders, ethnicities, education and wealth across diversified groups. She has studied trust in terms of its influence on economic behavior as well as prosocial behavior in different cultures, examining equality and fairness in terms of their influence on people’s decision making and subjective well-beings. Her research also provides insights on how cultural changes, social media and online networking may influence society. She received a Ph.D degree in social psychology from Chinese University of Hong Kong and a Master’s Degree in developmental psychology from Columbia University.",
	},
	{
		"image": "image4",
		"name": "Grace Xia",
		"content": "Grace has lived in Australia, Hongkong and China. She worked in a multinational cosmetic corporation coordinating its supply chain system buildup, ERP execution and financial system operation. She also led the online payment system development, engaging all the stakeholders such as banks, vendors, sales forces, etc. while at this company. Grace is now based in Melbourne promoting Australian K-12 education in the Asia Pacific region. Grace understands the future potential of blockchain technology for supply chain management. Blockchain technology can be used to trace supply chain stages of product development, and it offers solutions to ensure food safety, reduce counterfeiting, reduce child labor, etc. Grace also intends to introduce the decentralization idea to students, promoting the freedom and sharing in them.",
	},
	{
		"image": "image5",
		"name": "Felicia Bao",
		"content": "Ms. Bao earned her Master's degree in economic theory and econometrics in France. She is an economic analyst looking at the virtual currency ecosystem and impact of blockchain technology. She has specialized knowledge in game theory and mechanism design during her academic years, which are vital tools when designing ecosystems within blockchain. With both academic and professional expertise, she wrote a long research report, where she analyzed the value of Bitcoin and blockchain when most researchers were not paying attention to this promising field. Her insights to building up sound mechanisms make her contributions more valuable in realizing the potential of EOS to secure life, liberty and property.",
	}
];

function getQueryStringByName(name)
{
	var result = location.search.match(new RegExp("[\?\&]" + name+ "=([^\&]+)","i"));

	if(result == null || result.length < 1)
	{
		return "";
	}

	return result[1];
}

$(document).ready(function() {
	var idx = getQueryStringByName("id");
	idx = Number(idx);

	if (idx < 0 || idx > 5 || idx == null || isNaN(idx))
	{
		idx = 0;
	}

	var image = info[idx].image;
	var name = info[idx].name;
	var content = info[idx].content;

	var html_code = '<div class="image ' + image + '"></div>';
	html_code += '<div class="name">' + name + '</div>';
	html_code += '<div class="content">' + content + '</div>';

	$("#memberinfo").html(html_code);
});

</script>

</body>
</html>