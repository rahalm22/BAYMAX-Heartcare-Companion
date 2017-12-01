/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package baymax_ml_part;

import java.util.ArrayList;

/**
 *
 * @author Mabeesha
 */
public class DoctorDataBase 
{
    public ArrayList<Double>[] diabetes_past_data = (ArrayList<Double>[])new ArrayList[11];//gender(female=0,male=1) , age(20-120) , SystolicBloodPressure(SBP)(70-190 mmHg) , DiastolicBloodPressure(DBP)(40-100 mmHg) , TreatmentForHypertension(No=0,Yes=1) , BMI(5-130) , HDL(1-100 mg/dL) , Triglyceride(1-1000 mg/dL) , Fasting Glucose Level (1-200 mg/dL), ParentalDiabetes (No=0,Yes=1) , DoctorsPrediction(No=0,Yes=1)
    public ArrayList<Double>[] stroke_past_data   = (ArrayList<Double>[])new ArrayList[9];//age(20-120) , SystolicBloodPressure(70-190 mgHg) , Diabetes(No=0,Yes=1) , Cigarette smoking(0-100 pack years) , cardiovascular disease?(no=0,yes=1) , Artial Fibrillation?(no=0,yes=1) , Left ventricular hypertrophy(No=0,Yes=1) , Use of hypertensive medication(No=0,Yes=1) , DoctorsPrediction(No=0,Yes=1)
    public ArrayList<Double>[] HardCoronaryHeartDisease_past_data = (ArrayList<Double>[])new ArrayList[7];//age(20-120) , Total cholesterol(0-500 mg/dL) , HDL(0-100 mg/dL) , SBP(70-190 mmHg) , TreatmentForHypertension(No=0,Yes=1) , Cigarette smoking(0-100 pack years) , DoctorsPrediction(No=0,Yes=1)
    public ArrayList<Double>[] CoronaryHeartDisease_past_data = (ArrayList<Double>[])new ArrayList[10];//age(20-120) ,gender(female=0, male=1), Diabetes(No=0 , Yes=1) , Cigarette smoking(0-100 pack years) , SBP(70-190 mmHg) , DBP(40-100 mmHg) , HDL(1-100 mg/dL) , LDL(1-500 mg/dL) , Total cholesterol(0-500 mg/dL) , DoctorsPrediction(No=0,Yes=1) 
    public ArrayList<Double>[] CongestiveHeartFailure_past_data = (ArrayList<Double>[])new ArrayList[10];//age(20-120) , Heart rate(1-200) , SBP(70-190 mmHg) , BMI(5-130) , Left ventricular hypertrophy(No=0,Yes=1) , Coronary heart disease(No=0,Yes=1) , Valve disease(No=0,Yes=1) , Diabetes(No=0,Yes=1) , Cardiomegaly(No=0,Yes=1) , DoctorsPrediction(No=0,Yes=1)
    public ArrayList<Double>[] CardiovascularDisease_past_data = (ArrayList<Double>[])new ArrayList[9];//age(20-120) , gender(female=0, male=1) , Diabetes(No=0,Yes=1) , Cigarette smoking(0-100 pack years) , SBP(70-190 mmHg) , Total cholesterol(0-500 mg/dL) , HDL(0-100 mg/dL) , BMI(5-130) , DoctorsPrediction(No=0,Yes=1)
    public ArrayList<Double>[] AtrialFibrillation_past_data = (ArrayList<Double>[])new ArrayList[8];//age(20-120) , gender(female=0, male=1) , BMI(5-130) , SBP(70-190 mmHg) , TreatmentForHypertension(No=0,Yes=1) , Significant murmur(No=0,Yes=1) , PR Interval(0-500 millisec) , Diabetes(No=0,Yes=1) , DoctorsPrediction(No=0,Yes=1) , Left ventricular hypertrophy(No=0,Yes=1                
    public ArrayList<Double>[] IntermittentClaudication_past_data = (ArrayList<Double>[])new ArrayList[8];//age(20-120) , gender(female=0, male=1) , Total cholesterol(0-500 mg/dL) , TreatmentForHypertension(No=0,Yes=1) , Cigarette smoking(0-100 pack years) , Diabetes(No=0,Yes=1) , Coronary heart disease(No=0,Yes=1) , DoctorsPrediction(No=0,Yes=1)    
    
    public DoctorDataBase()
    {
        
        
    }
    
    
}
