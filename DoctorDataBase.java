/*
/ * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//package baymax_ml_part;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
import java.util.ArrayList;

/**
 *
 * @author Mabeesha
 */
public class DoctorDataBase 
{
    //public ArrayList<Double>[] diabetes_past_data = (ArrayList<Double>[])new ArrayList[11];//gender(female=0,male=1) , age(20-120) , SystolicBloodPressure(SBP)(70-190 mmHg) , DiastolicBloodPressure(DBP)(40-100 mmHg) , TreatmentForHypertension(No=0,Yes=1) , BMI(5-130) , HDL(1-100 mg/dL) , Triglyceride(1-1000 mg/dL) , Fasting Glucose Level (1-200 mg/dL), ParentalDiabetes (No=0,Yes=1) , DoctorsPrediction(No=0,Yes=1)
    public ArrayList<Double>[] stroke_past_data   = (ArrayList<Double>[])new ArrayList[9];//age(20-120) , SystolicBloodPressure(70-190 mgHg) , Diabetes(No=0,Yes=1) , Cigarette smoking(0-100 pack years) , cardiovascular disease?(no=0,yes=1) , Artial Fibrillation?(no=0,yes=1) , Left ventricular hypertrophy(No=0,Yes=1) , Use of hypertensive medication(No=0,Yes=1) , DoctorsPrediction(No=0,Yes=1)
    public ArrayList<Double>[] HardCoronaryHeartDisease_past_data = new ArrayList[7];//age(20-120) , Total cholesterol(0-500 mg/dL) , HDL(0-100 mg/dL) , SBP(70-190 mmHg) , TreatmentForHypertension(No=0,Yes=1) , Cigarette smoking(0-100 pack years) , DoctorsPrediction(No=0,Yes=1)
    public ArrayList<Double>[] CoronaryHeartDisease_past_data = (ArrayList<Double>[])new ArrayList[10];//age(20-120) ,gender(female=0, male=1), Diabetes(No=0 , Yes=1) , Cigarette smoking(0-100 pack years) , SBP(70-190 mmHg) , DBP(40-100 mmHg) , HDL(1-100 mg/dL) , LDL(1-500 mg/dL) , Total cholesterol(0-500 mg/dL) , DoctorsPrediction(No=0,Yes=1) 
    public ArrayList<Double>[] CongestiveHeartFailure_past_data = (ArrayList<Double>[])new ArrayList[10];//age(20-120) , Heart rate(1-200) , SBP(70-190 mmHg) , BMI(5-130) , Left ventricular hypertrophy(No=0,Yes=1) , Coronary heart disease(No=0,Yes=1) , Valve disease(No=0,Yes=1) , Diabetes(No=0,Yes=1) , Cardiomegaly(No=0,Yes=1) , DoctorsPrediction(No=0,Yes=1)
    public ArrayList<Double>[] CardiovascularDisease_past_data = (ArrayList<Double>[])new ArrayList[9];//age(20-120) , gender(female=0, male=1) , Diabetes(No=0,Yes=1) , Cigarette smoking(0-100 pack years) , SBP(70-190 mmHg) , Total cholesterol(0-500 mg/dL) , HDL(0-100 mg/dL) , BMI(5-130) , DoctorsPrediction(No=0,Yes=1)
    public ArrayList<Double>[] AtrialFibrillation_past_data = (ArrayList<Double>[])new ArrayList[10];//age(20-120) , gender(female=0, male=1) , BMI(5-130) , SBP(70-190 mmHg) , TreatmentForHypertension(No=0,Yes=1) , Significant murmur(No=0,Yes=1) , PR Interval(0-500 millisec) , Diabetes(No=0,Yes=1) , DoctorsPrediction(No=0,Yes=1) , Left ventricular hypertrophy(No=0,Yes=1                
    public ArrayList<Double>[] IntermittentClaudication_past_data = (ArrayList<Double>[])new ArrayList[8];//age(20-120) , gender(female=0, male=1) , Total cholesterol(0-500 mg/dL) , TreatmentForHypertension(No=0,Yes=1) , Cigarette smoking(0-100 pack years) , Diabetes(No=0,Yes=1) , Coronary heart disease(No=0,Yes=1) , DoctorsPrediction(No=0,Yes=1)    
    
    public DoctorDataBase()
    {
    	for(int i=0;i<10;i++) //initializing
    	{
    		if(i<7)HardCoronaryHeartDisease_past_data[i] = new ArrayList<Double>();
    		if(i<8) 
    		{ 
    			IntermittentClaudication_past_data[i] = new ArrayList<Double>();
    		}    		
    		if(i<9) 
    		{ 
    			stroke_past_data[i] = new ArrayList<Double>();
    			CardiovascularDisease_past_data[i] = new ArrayList<Double>();
    		}
    		if(i<10) 
    		{ 
    			CongestiveHeartFailure_past_data[i] = new ArrayList<Double>();
    			CoronaryHeartDisease_past_data[i] = new ArrayList<Double>();
    			AtrialFibrillation_past_data[i] = new ArrayList<Double>();
    		}
    		
    	}
    	try // getiing data from mySql to java array of arraylists
    	{  
    		Class.forName("com.mysql.jdbc.Driver");  
    		Connection con=DriverManager.getConnection(  
    		"jdbc:mysql://localhost:3306/BAYMAX","root","");  
    		//here sonoo is database name, root is username and password  
    		Statement stmt=con.createStatement();  
    		//stroke
    		ResultSet rs=stmt.executeQuery("select age , sbp , diabetes , smoking, cardiovascular, artialfibrillation , lvh , hypertensivemedication , stroke from patientdetails");  
    		
    		while(rs.next()) {
    			for(int i = 1; i < 10; i++) 
    			{
    			//System.out.println(rs.getString(i));
    				if(i==1 || i==2 || i==4)stroke_past_data[i-1].add(rs.getDouble(i));
    				else {  stroke_past_data[i-1].add(convert(rs.getString(i)));  }
    			}
    		}
    	    
    		//stroke
    		//age(20-120) , Total cholesterol(0-500 mg/dL) , HDL(0-100 mg/dL) , SBP(70-190 mmHg) , TreatmentForHypertension(No=0,Yes=1) , Cigarette smoking(0-100 pack years) , DoctorsPrediction(No=0,Yes=1)
    		rs=stmt.executeQuery("select age , totcholestrol , hdl , sbp , hypertensivemedication , smoking , hardcoronaryheart from patientdetails");  
    		
    		while(rs.next()) {
    			for(int i = 1; i < 8; i++) 
    			{
    			//System.out.println(rs.getString(i));
    				if(i==1 || i==2 || i==3 || i==4 || i==6)HardCoronaryHeartDisease_past_data[i-1].add(rs.getDouble(i));
    				else {  HardCoronaryHeartDisease_past_data[i-1].add(convert(rs.getString(i)));  }
    			}
    		}    		
    		
    		//CoronaryHeartDisease
    		//age(20-120) ,gender(female=0, male=1), Diabetes(No=0 , Yes=1) , Cigarette smoking(0-100 pack years) , SBP(70-190 mmHg) , DBP(40-100 mmHg) , HDL(1-100 mg/dL) , LDL(1-500 mg/dL) , Total cholesterol(0-500 mg/dL) , DoctorsPrediction(No=0,Yes=1) 
    		rs=stmt.executeQuery("select age , gender , diabetes , smoking , sbp , dbp , hdl , ldl , totcholestrol , coronaryheart from patientdetails");  
    		
    		while(rs.next()) {
    			for(int i = 1; i < 11; i++) 
    			{
    			//System.out.println(rs.getString(i));
    				if(i == 2)CoronaryHeartDisease_past_data[i-1].add(convertMF(rs.getString(i)));
    			    else if(i==1 || i==4 || i==5 || i==6 || i==7 || i==8 || i==9)CoronaryHeartDisease_past_data[i-1].add(rs.getDouble(i));
    				else {  CoronaryHeartDisease_past_data[i-1].add(convert(rs.getString(i)));  }
    			}
    		}      		
    		
    		//CongestiveHeartFailure
    		//age(20-120) , Heart rate(1-200) , SBP(70-190 mmHg) , BMI(5-130) , Left ventricular hypertrophy(No=0,Yes=1) , Coronary heart disease(No=0,Yes=1) , Valve disease(No=0,Yes=1) , Diabetes(No=0,Yes=1) , Cardiomegaly(No=0,Yes=1) , DoctorsPrediction(No=0,Yes=1)
    		rs=stmt.executeQuery("select age , heartrate ,sbp, height , weight , lvh , coronaryheart , valve , diabetes , cardiomegaly , conjestiveheartfailure  from patientdetails");  
    		
    		while(rs.next()) {
    			for(int i = 1; i < 12; i++) 
    			{
    			//System.out.println(rs.getString(i));
    				if(i == 4) { CongestiveHeartFailure_past_data[i-1].add(convertBMI( rs.getDouble(i) , rs.getDouble(i+1) )) ; i++; }
    			    else if(i==1 || i==2 || i==3)CongestiveHeartFailure_past_data[i-1].add(rs.getDouble(i));
    				else {  CongestiveHeartFailure_past_data[i-2].add(convert(rs.getString(i)));  }
    			}
    		}      		
    		
    		//CardiovascularDisease
    		//BMI(5-130) , age(20-120) ,  gender(female=0, male=1) , Diabetes(No=0,Yes=1) , Cigarette smoking(0-100 pack years) , SBP(70-190 mmHg) , Total cholesterol(0-500 mg/dL) , HDL(0-100 mg/dL)  , DoctorsPrediction(No=0,Yes=1)
    		rs=stmt.executeQuery("select  height , weight , age , gender , diabetes , smoking , sbp , totcholestrol , hdl , cardiovascular   from patientdetails");  
    		
    		while(rs.next()) {
    			for(int i = 1; i < 11; i++) 
    			{
    			//System.out.println(rs.getString(i));
    				if(i == 1) { CardiovascularDisease_past_data[i-1].add(convertBMI( rs.getDouble(i) , rs.getDouble(i+1) )) ; i++; }
    				else if(i == 4)CardiovascularDisease_past_data[i-2].add(convertMF(rs.getString(i)));
    			    else if(i==3 || i==6 || i==7 || i==8 || i==9)CardiovascularDisease_past_data[i-2].add(rs.getDouble(i));
    				else {  CardiovascularDisease_past_data[i-2].add(convert(rs.getString(i)));  }
    			}
    		}      		
    		
    		
    		//AtrialFibrillation_past_data
    		//BMI(5-130) , age(20-120) , gender(female=0, male=1) , SBP(70-190 mmHg) , TreatmentForHypertension(No=0,Yes=1) , Significant murmur(No=0,Yes=1) , PR Interval(0-500 millisec) , Diabetes(No=0,Yes=1) , Left ventricular hypertrophy(No=0,Yes=1) ,DoctorsPrediction(No=0,Yes=1) , 
    		rs=stmt.executeQuery("select  height , weight , age , gender , sbp , hypertensivemedication , significantmurmur ,  printervals , diabetes , lvh , artialfibrillation from patientdetails");  
    		
    		while(rs.next()) {
    			for(int i = 1; i < 12; i++) 
    			{
    			//System.out.println(rs.getString(i));
    				if(i == 1) { AtrialFibrillation_past_data[i-1].add(convertBMI( rs.getDouble(i) , rs.getDouble(i+1) )) ; i++; }
    				else if(i == 4)AtrialFibrillation_past_data[i-2].add(convertMF(rs.getString(i)));
    			    else if(i==3 || i==5 || i==8)AtrialFibrillation_past_data[i-2].add(rs.getDouble(i));
    				else {  AtrialFibrillation_past_data[i-2].add(convert(rs.getString(i)));  }
    			}
    		}      		
    		
    		//IntermittentClaudication
    		//age(20-120) , gender(female=0, male=1) , Total cholesterol(0-500 mg/dL) , TreatmentForHypertension(No=0,Yes=1) , Cigarette smoking(0-100 pack years) , Diabetes(No=0,Yes=1) , Coronary heart disease(No=0,Yes=1) , DoctorsPrediction(No=0,Yes=1)    
    		rs=stmt.executeQuery("select  age , gender , totcholestrol , hypertensivemedication , smoking , diabetes , coronaryheart , intermittentclaudication from patientdetails");  
    		
    		while(rs.next()) {
    			for(int i = 1; i < 9; i++) 
    			{
    			//System.out.println(rs.getString(i));
    				if(i == 2)IntermittentClaudication_past_data[i-1].add(convertMF(rs.getString(i)));
    			    else if(i==1 || i==3 || i==5)IntermittentClaudication_past_data[i-1].add(rs.getDouble(i));
    				else {  IntermittentClaudication_past_data[i-1].add(convert(rs.getString(i)));  }
    			}
    		}     		
    		
    		
    		
    		
    		con.close();  
 /*   		int m = 5;
    	    for(int i=0;i<m;i++) 
    		{
    			for(int j=0;j<9;j++) 
    			{
    				System.out.printf("%f ",stroke_past_data[j].get(i));
    			}
    			System.out.println();
    		}
    	    System.out.println();
    	    for(int i=0;i<m;i++) 
    		{
    			for(int j=0;j<7;j++) 
    			{
    				System.out.printf("%f ",HardCoronaryHeartDisease_past_data[j].get(i));
    			}
    			System.out.println();
    		}
    	    System.out.println();
    	    for(int i=0;i<m;i++) 
    		{
    			for(int j=0;j<10;j++) 
    			{
    				System.out.printf("%f ",CoronaryHeartDisease_past_data[j].get(i));
    			}
    			System.out.println();
    		}
    	    System.out.println();
    	    for(int i=0;i<m;i++) 
    		{
    			for(int j=0;j<10;j++) 
    			{
    				System.out.printf("%f ",CongestiveHeartFailure_past_data[j].get(i));
    			}
    			System.out.println();
    		}    	
    	    System.out.println();
    	    for(int i=0;i<m;i++) 
    		{
    			for(int j=0;j<9;j++) 
    			{
    				System.out.printf("%f ",CardiovascularDisease_past_data[j].get(i));
    			}
    			System.out.println();
    		}    	    	
    	    System.out.println();
    	    for(int i=0;i<m;i++) 
    		{
    			for(int j=0;j<10;j++) 
    			{
    				System.out.printf("%f ",AtrialFibrillation_past_data[j].get(i));
    			}
    			System.out.println();
    		}
    	    System.out.println();
    	    for(int i=0;i<m;i++) 
    		{
    			for(int j=0;j<8;j++) 
    			{
    				System.out.printf("%f ",IntermittentClaudication_past_data[j].get(i));
    			}
    			System.out.println();
    		}  */  	    
    	
    	}catch(Exception e){ System.out.println(e);}  
        
        
    }

	private Double convert(String string) {
		if(string.equals("Yes")) return 1.0;
		else {return 0.0;}
	}
	
	private Double convertMF(String string) {
		if(string.equals("M")) return 1.0;
		else {return 0.0;}
	}
	
	private Double convertBMI(Double height , Double weight) {
		return weight / (height*height) ; 
	}	
}
