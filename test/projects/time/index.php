<?php
	
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Time</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.1/jquery.mobile-1.4.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.1/jquery.mobile-1.4.1.min.js"></script>
	<style>
		.ref {height:20px;width:6000px;margin:15px 0;}
		.ref div {height:20px;width:90.5px;border-right:1px solid #FF0000;display: inline-block;text-align: center;}
	</style>
</head>
<body>
    <div data-role="page" style="margin-bottom:30px;">
 
        <div data-role="header">
        	<header>
				<h1 style="text-align:center;">TIME</h1>
			</header>
        </div><!-- /header -->
 
        <div data-role="content">


<?php

$form = "<form action=\"#\" method=\"get\" target=\"_blank\">
					<label for=\"slider-1\">How old are you?</label>
					<input type=\"range\" name=\"age\" id=\"slider-1\" min=\"1\" max=\"99\" value=\"50\">
			<h4>What would you like to do with your life?</h4>
			<p>pick the top 5 items on your bucket list and realistically estimate the amount of time each will take to do</p>
		<hr>
		<br>
				<label for=\"text-basic\">Item #1</label>
						<input type=\"text\" data-clear-btn=\"true\" name=\"item-1\" id=\"text-basic\" placeholder=\"write a book\" value=\"\">
			
				<fieldset data-role=\"controlgroup\" data-type=\"horizontal\">
			        <legend></legend>
			        <label for=\"select-h-1a\">Select A</label>
				        <select name=\"days-1\" id=\"select-h-1a\">
				            <option value=\"0\">Days</option>
				            <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
				            <option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
				            <option>11</option><option>12</option><option>13</option><option>14</option><option>15</option>
				            <option>16</option><option>17</option><option>18</option><option>19</option><option>20</option>
				            <option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
				            <option>26</option><option>27</option><option>28</option><option>29</option>
				        </select>
			        <label for=\"select-h-1b\">Select B</label>
				        <select name=\"months-1\" id=\"select-h-1b\">
				            <option value=\"0\">Months</option>
				            <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
				            <option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option>
				        </select>
			        <label for=\"select-h-1c\">Select C</label>
				        <select name=\"years-1\" id=\"select-h-1c\">
				            <option value=\"0\">Years</option>
							<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
				            <option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
				            <option>11</option><option>12</option><option>13</option><option>14</option><option>15</option>
				            <option>16</option><option>17</option><option>18</option><option>19</option><option>20</option>
				            <option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
				            <option>26</option><option>27</option><option>28</option><option>29</option><option>30</option>
				            <option>31</option><option>32</option><option>33</option><option>34</option><option>35</option>
				            <option>36</option><option>37</option><option>38</option><option>39</option><option>40</option>
				            <option>41</option><option>42</option><option>43</option><option>44</option><option>45</option>
				            <option>46</option><option>47</option><option>48</option><option>49</option><option>50</option>
				            <option>51</option><option>52</option><option>53</option><option>54</option><option>55</option>
				            <option>56</option><option>57</option><option>58</option><option>59</option><option>60</option>
				            <option>61</option><option>62</option><option>63</option><option>64</option><option>65</option>
				            <option>66</option><option>67</option><option>68</option><option>69</option><option>70</option>
				            <option>71</option><option>72</option><option>73</option><option>74</option><option>75</option>
				            <option>76</option><option>77</option><option>78</option><option>79</option><option>80</option>
				            <option>81</option><option>82</option><option>83</option><option>84</option><option>85</option>
				            <option>86</option><option>87</option><option>88</option><option>89</option><option>90</option>
				            <option>91</option><option>92</option><option>93</option><option>94</option><option>95</option>
				            <option>96</option><option>97</option><option>98</option><option>99</option>				            
				        </select>
			    </fieldset>
			    <br>
		<hr>
		<br>
				<label for=\"text-basic\">Item #2</label>
						<input type=\"text\" data-clear-btn=\"true\" name=\"item-2\" id=\"text-basic\" placeholder=\"see the northern lights\" value=\"\">
			
				<fieldset data-role=\"controlgroup\" data-type=\"horizontal\">
			        <legend></legend>
			        <label for=\"select-h-1a\">Select A</label>
				        <select name=\"days-2\" id=\"select-h-1a\">
				            <option value=\"0\">Days</option>
				            <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
				            <option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
				            <option>11</option><option>12</option><option>13</option><option>14</option><option>15</option>
				            <option>16</option><option>17</option><option>18</option><option>19</option><option>20</option>
				            <option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
				            <option>26</option><option>27</option><option>28</option><option>29</option>
				        </select>
			        <label for=\"select-h-1b\">Select B</label>
				        <select name=\"months-2\" id=\"select-h-1b\">
				            <option value=\"0\">Months</option>
				            <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
				            <option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option>
				        </select>
			        <label for=\"select-h-1c\">Select C</label>
				        <select name=\"years-2\" id=\"select-h-1c\">
				            <option value=\"0\">Years</option>
							<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
				            <option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
				            <option>11</option><option>12</option><option>13</option><option>14</option><option>15</option>
				            <option>16</option><option>17</option><option>18</option><option>19</option><option>20</option>
				            <option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
				            <option>26</option><option>27</option><option>28</option><option>29</option><option>30</option>
				            <option>31</option><option>32</option><option>33</option><option>34</option><option>35</option>
				            <option>36</option><option>37</option><option>38</option><option>39</option><option>40</option>
				            <option>41</option><option>42</option><option>43</option><option>44</option><option>45</option>
				            <option>46</option><option>47</option><option>48</option><option>49</option><option>50</option>
				            <option>51</option><option>52</option><option>53</option><option>54</option><option>55</option>
				            <option>56</option><option>57</option><option>58</option><option>59</option><option>60</option>
				            <option>61</option><option>62</option><option>63</option><option>64</option><option>65</option>
				            <option>66</option><option>67</option><option>68</option><option>69</option><option>70</option>
				            <option>71</option><option>72</option><option>73</option><option>74</option><option>75</option>
				            <option>76</option><option>77</option><option>78</option><option>79</option><option>80</option>
				            <option>81</option><option>82</option><option>83</option><option>84</option><option>85</option>
				            <option>86</option><option>87</option><option>88</option><option>89</option><option>90</option>
				            <option>91</option><option>92</option><option>93</option><option>94</option><option>95</option>
				            <option>96</option><option>97</option><option>98</option><option>99</option>				            
				        </select>
			    </fieldset>
			    <br>
		<hr>
		<br>
				<label for=\"text-basic\">Item #3</label>
						<input type=\"text\" data-clear-btn=\"true\" name=\"item-3\" id=\"text-basic\" placeholder=\"learn to play my favorite song on guitar\" value=\"\">
			
				<fieldset data-role=\"controlgroup\" data-type=\"horizontal\">
			        <legend></legend>
			        <label for=\"select-h-1a\">Select A</label>
				        <select name=\"days-3\" id=\"select-h-1a\">
				            <option value=\"0\">Days</option>
				            <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
				            <option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
				            <option>11</option><option>12</option><option>13</option><option>14</option><option>15</option>
				            <option>16</option><option>17</option><option>18</option><option>19</option><option>20</option>
				            <option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
				            <option>26</option><option>27</option><option>28</option><option>29</option>
				        </select>
			        <label for=\"select-h-1b\">Select B</label>
				        <select name=\"months-3\" id=\"select-h-1b\">
				            <option value=\"0\">Months</option>
				            <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
				            <option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option>
				        </select>
			        <label for=\"select-h-1c\">Select C</label>
				        <select name=\"years-3\" id=\"select-h-1c\">
				            <option value=\"0\">Years</option>
							<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
				            <option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
				            <option>11</option><option>12</option><option>13</option><option>14</option><option>15</option>
				            <option>16</option><option>17</option><option>18</option><option>19</option><option>20</option>
				            <option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
				            <option>26</option><option>27</option><option>28</option><option>29</option><option>30</option>
				            <option>31</option><option>32</option><option>33</option><option>34</option><option>35</option>
				            <option>36</option><option>37</option><option>38</option><option>39</option><option>40</option>
				            <option>41</option><option>42</option><option>43</option><option>44</option><option>45</option>
				            <option>46</option><option>47</option><option>48</option><option>49</option><option>50</option>
				            <option>51</option><option>52</option><option>53</option><option>54</option><option>55</option>
				            <option>56</option><option>57</option><option>58</option><option>59</option><option>60</option>
				            <option>61</option><option>62</option><option>63</option><option>64</option><option>65</option>
				            <option>66</option><option>67</option><option>68</option><option>69</option><option>70</option>
				            <option>71</option><option>72</option><option>73</option><option>74</option><option>75</option>
				            <option>76</option><option>77</option><option>78</option><option>79</option><option>80</option>
				            <option>81</option><option>82</option><option>83</option><option>84</option><option>85</option>
				            <option>86</option><option>87</option><option>88</option><option>89</option><option>90</option>
				            <option>91</option><option>92</option><option>93</option><option>94</option><option>95</option>
				            <option>96</option><option>97</option><option>98</option><option>99</option>				            
				        </select>
			    </fieldset>
			    <br>
		<hr>
		<br>
				<label for=\"text-basic\">Item #4</label>
						<input type=\"text\" data-clear-btn=\"true\" name=\"item-4\" id=\"text-basic\" placeholder=\"go skydiving\" value=\"\">
			
				<fieldset data-role=\"controlgroup\" data-type=\"horizontal\">
			        <legend></legend>
			        <label for=\"select-h-1a\">Select A</label>
				        <select name=\"days-4\" id=\"select-h-1a\">
				            <option value=\"0\">Days</option>
				            <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
				            <option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
				            <option>11</option><option>12</option><option>13</option><option>14</option><option>15</option>
				            <option>16</option><option>17</option><option>18</option><option>19</option><option>20</option>
				            <option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
				            <option>26</option><option>27</option><option>28</option><option>29</option>
				        </select>
			        <label for=\"select-h-1b\">Select B</label>
				        <select name=\"months-4\" id=\"select-h-1b\">
				            <option value=\"0\">Months</option>
				            <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
				            <option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option>
				        </select>
			        <label for=\"select-h-1c\">Select C</label>
				        <select name=\"years-4\" id=\"select-h-1c\">
				            <option value=\"0\">Years</option>
							<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
				            <option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
				            <option>11</option><option>12</option><option>13</option><option>14</option><option>15</option>
				            <option>16</option><option>17</option><option>18</option><option>19</option><option>20</option>
				            <option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
				            <option>26</option><option>27</option><option>28</option><option>29</option><option>30</option>
				            <option>31</option><option>32</option><option>33</option><option>34</option><option>35</option>
				            <option>36</option><option>37</option><option>38</option><option>39</option><option>40</option>
				            <option>41</option><option>42</option><option>43</option><option>44</option><option>45</option>
				            <option>46</option><option>47</option><option>48</option><option>49</option><option>50</option>
				            <option>51</option><option>52</option><option>53</option><option>54</option><option>55</option>
				            <option>56</option><option>57</option><option>58</option><option>59</option><option>60</option>
				            <option>61</option><option>62</option><option>63</option><option>64</option><option>65</option>
				            <option>66</option><option>67</option><option>68</option><option>69</option><option>70</option>
				            <option>71</option><option>72</option><option>73</option><option>74</option><option>75</option>
				            <option>76</option><option>77</option><option>78</option><option>79</option><option>80</option>
				            <option>81</option><option>82</option><option>83</option><option>84</option><option>85</option>
				            <option>86</option><option>87</option><option>88</option><option>89</option><option>90</option>
				            <option>91</option><option>92</option><option>93</option><option>94</option><option>95</option>
				            <option>96</option><option>97</option><option>98</option><option>99</option>				            
				        </select>
			    </fieldset>
			    <br>
		<hr>
		<br>
				<label for=\"text-basic\">Item #5</label>
						<input type=\"text\" data-clear-btn=\"true\" name=\"item-5\" id=\"text-basic\" placeholder=\"take a hot air balloon ride\" value=\"\">
			
				<fieldset data-role=\"controlgroup\" data-type=\"horizontal\">
			        <legend></legend>
			        <label for=\"select-h-1a\">Select A</label>
				        <select name=\"days-5\" id=\"select-h-1a\">
				            <option value=\"0\">Days</option>
				            <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
				            <option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
				            <option>11</option><option>12</option><option>13</option><option>14</option><option>15</option>
				            <option>16</option><option>17</option><option>18</option><option>19</option><option>20</option>
				            <option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
				            <option>26</option><option>27</option><option>28</option><option>29</option>
				        </select>
			        <label for=\"select-h-1b\">Select B</label>
				        <select name=\"months-5\" id=\"select-h-1b\">
				            <option value=\"0\">Months</option>
				            <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
				            <option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option>
				        </select>
			        <label for=\"select-h-1c\">Select C</label>
				        <select name=\"years-5\" id=\"select-h-1c\">
				            <option value=\"0\">Years</option>
							<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
				            <option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
				            <option>11</option><option>12</option><option>13</option><option>14</option><option>15</option>
				            <option>16</option><option>17</option><option>18</option><option>19</option><option>20</option>
				            <option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
				            <option>26</option><option>27</option><option>28</option><option>29</option><option>30</option>
				            <option>31</option><option>32</option><option>33</option><option>34</option><option>35</option>
				            <option>36</option><option>37</option><option>38</option><option>39</option><option>40</option>
				            <option>41</option><option>42</option><option>43</option><option>44</option><option>45</option>
				            <option>46</option><option>47</option><option>48</option><option>49</option><option>50</option>
				            <option>51</option><option>52</option><option>53</option><option>54</option><option>55</option>
				            <option>56</option><option>57</option><option>58</option><option>59</option><option>60</option>
				            <option>61</option><option>62</option><option>63</option><option>64</option><option>65</option>
				            <option>66</option><option>67</option><option>68</option><option>69</option><option>70</option>
				            <option>71</option><option>72</option><option>73</option><option>74</option><option>75</option>
				            <option>76</option><option>77</option><option>78</option><option>79</option><option>80</option>
				            <option>81</option><option>82</option><option>83</option><option>84</option><option>85</option>
				            <option>86</option><option>87</option><option>88</option><option>89</option><option>90</option>
				            <option>91</option><option>92</option><option>93</option><option>94</option><option>95</option>
				            <option>96</option><option>97</option><option>98</option><option>99</option>				            
				        </select>
			    </fieldset>
			    <br>
		<hr>
			<br>
			<div>
				<label for=\"submit-2\">All Done?</label>
					<button class=\"ui-shadow ui-btn ui-corner-all\" type=\"submit\" id=\"submit-2\">Submit</button>
			</form>";

	class User {
		public $agewidth, $item1width, $item2width, $item3width, $item4width, $item5width, $age, $item1, $item2, $item3, $item4, $item5, $days1, $days2, $days3, $days4, $days5, $months1, $months2, $months3, $months4, $months5, $years1, $years2, $years3, $years4, $years5; 

		public function div_maker() {
			$this->agewidth = ($this->age*365)/4;
			$this->item1width = ((($this->years1*365) + ($this->months1*30) + $this->days1)/4)+1;
			$this->item2width = ((($this->years2*365) + ($this->months2*30) + $this->days2)/4)+1;
			$this->item3width = ((($this->years3*365) + ($this->months3*30) + $this->days3)/4)+1;
			$this->item4width = ((($this->years4*365) + ($this->months4*30) + $this->days4)/4)+1;
			$this->item5width = ((($this->years5*365) + ($this->months5*30) + $this->days5)/4)+1;
			echo "<div style=\"overflow-x:scroll; padding-left:12px;\">
				<h3>Comparisons:</h3>
				<p style=\"margin:0;\">average human lifespan [ 26644 day(s) ]:</p>
				<div style=\"height:30px; width:6661px; background-color:#FF0000;\"></div>
				<p style=\"margin:0;\">average human lifespan 0 A.D. [ 10950 day(s) ]:</p>
				<div style=\"height:30px; width:2737.5px; background-color:#FF6600;\"></div>
				<p style=\"margin:0;\">average time spent sleeping in a lifetime [ 8880 day(s) ]:</p>
				<div style=\"height:30px; width:2220px; background-color:#FFCC00;\"></div>
				<p style=\"margin:0;\">average cat lifespan [ 5110 day(s) ]:</p>
				<div style=\"height:30px; width:1277.5px; background-color:#CCFF00\";></div>
				<p style=\"margin:0;\">average dog lifespan [ 4020 day(s) ]:</p>
				<div style=\"height:30px; width:1005px; background-color:#66FF00;\"></div>
				<p style=\"margin:0;\">average time spent eating in a lifetime [ 1110 day(s) ]:</p>
				<div style=\"height:30px; width:277.5px; background-color:#00FF66;\"></div>
				<p style=\"margin:0;\">average time spent in 13 years of school [ 740 day(s) ]:</p>
				<div style=\"height:30px; width:185px; background-color:#00FFCC;\"></div>
				<p style=\"margin:0;\">human gestation period [ 280 day(s) ]:</p>
				<div style=\"height:30px; width:70px; background-color:#00CCFF;\"></div>
				<div class=\"ref\">";
			for ($i=1; $i < 51; $i++) { 
				echo "<div>" . $i . "</div>";
			}
			echo "</div>
				<h3>Your Data:</h3>
				<p style=\"margin:0;\">your current lifespan [ " . (($this->agewidth))*4 . " day(s) ]:</p> 
				<div style=\"height:30px; width:" . $this->agewidth .  "px; background-color:#0066FF; display:inline-block;\"></div>
				<p style=\"margin:0;\">" . $this->item1 . " [ " . (($this->item1width)-1)*4 . " day(s) ]:</p>
				<div style=\"height:30px; width:" . $this->item1width .  "px; background-color:#0000FF; display:inline-block;\"></div>
				<p style=\"margin:0;\">" . $this->item2 . " [ " . (($this->item2width)-1)*4 . " day(s) ]:</p>
				<div style=\"height:30px; width:" . $this->item2width .  "px; background-color:#6600FF; display:inline-block;\"></div>
				<p style=\"margin:0;\">" . $this->item3 . " [ " . (($this->item3width)-1)*4 . " day(s) ]:</p>
				<div style=\"height:30px; width:" . $this->item3width .  "px; background-color:#CC00FF; display:inline-block;\"></div>
				<p style=\"margin:0;\">" . $this->item4 . " [ " . (($this->item4width)-1)*4 . " day(s) ]:</p>
				<div style=\"height:30px; width:" . $this->item4width .  "px; background-color:#FF00CC; display:inline-block;\"></div>
				<p style=\"margin:0;\">" . $this->item5 . " [ " . (($this->item5width)-1)*4 . " day(s) ]:</p>
				<div style=\"height:30px; width:" . $this->item5width .  "px; background-color:#FF0066; display:inline-block;\"></div>
				</div>";
		}
	}

	$object = new User;
	$object->age = $_GET['age'];
	$object->item1 = $_GET['item-1'];
	$object->item2 = $_GET['item-2'];
	$object->item3 = $_GET['item-3'];
	$object->item4 = $_GET['item-4'];
	$object->item5 = $_GET['item-5'];
	$object->days1 = $_GET['days-1'];
	$object->days2 = $_GET['days-2'];
	$object->days3 = $_GET['days-3'];
	$object->days4 = $_GET['days-4'];
	$object->days5 = $_GET['days-5'];
	$object->months1 = $_GET['months-1'];
	$object->months2 = $_GET['months-2'];
	$object->months3 = $_GET['months-3'];
	$object->months4 = $_GET['months-4'];
	$object->months5 = $_GET['months-5'];
	$object->years1 = $_GET['years-1'];
	$object->years2 = $_GET['years-2'];
	$object->years3 = $_GET['years-3'];
	$object->years4 = $_GET['years-4'];
	$object->years5 = $_GET['years-5'];


	if (!$object->age && !$object->item1 && !$object->item2 && !$object->item3 && !$object->item4 && !$object->item5) {
		echo $form;
		echo "<br>";
	} else {
		$object->div_maker();
	}
?>

	    </div><!-- /content -->

    </div><!-- /page -->

</body>
</html>